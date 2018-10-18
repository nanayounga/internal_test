<?php namespace App\Http\Controllers\Sale;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Sales_department;
use App\Sales_week;
use App\Sales_cost;
use App\Log;
use Input;
use Validator;
use Session;
use Config;
use Util;

class SaleManagerController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->sales_department = new Sales_department();
		$this->sales_week = new Sales_week();
		$this->sales_cost = new Sales_cost();
		$this->log = new Log();
	}

	public function year_cost()
	{
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions('view_cost');

		// getパラメーターのバリデーション
		$validator = Validator::make(Input::all(), [
			'year' => 'date_format:Y',
		]);
		if ($validator->fails()) abort('404');

		// 年の設定
		$year = (Input::get('year') == NULL) ? date('Y') : Input::get('year');

		// 指定年の総経費の取得
		$year_cost_obj = $this->sales_cost->select('sales_cost_value')
			->where('sales_cost_year_month', 'like', "{$year}%")
			->get();
		$this->pass_data['year_cost'] = 0;
		foreach ($year_cost_obj as $obj) $this->pass_data['year_cost'] += $obj->sales_cost_value;

		// 指定年の総売上を取得
		$year_sale_obj = $this->sales_week->select('sales_week_result')
			->where('sales_week_year_month', 'like', "{$year}%")
			->get();
		$this->pass_data['year_sale'] = 0;
		foreach ($year_sale_obj as $obj) $this->pass_data['year_sale'] += $obj->sales_week_result;

		// 利益率の計算 （総売上額-経費総額）/ 総売上額 * 100
		$this->pass_data['ratio'] = 0;
		if ($this->pass_data['year_sale'])
		{
			$this->pass_data['ratio'] = ($this->pass_data['year_sale'] - $this->pass_data['year_cost']) / $this->pass_data['year_sale'] * 100;
			$this->pass_data['ratio'] = round($this->pass_data['ratio'], 1);
		}

		$this->pass_data['year'] = $year;

		return view('sale/manager/year_cost', $this->pass_data);
	}

	/**
	 * 経費の登録
	 *
	 * @param
	 * @return
	 */
	public function store_cost(Request $request)
	{
		// バリデーション
		$this->validate($request, [
			'sales_cost_year_month' => 'required|date_format:Y-m',
			'sales_department_id' => 'integer',
			'sales_cost_value' => 'required|numeric',
		]);

		// DBへ新規登録 OR 更新
		$query_result = $this->sales_cost->insert_or_update($request);

		if ($query_result)
		{
			Session::flash('notice', '更新処理が完了しました。');
			return redirect("sale/manager/table/?year_month={$request->sales_cost_year_month}");
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect("sale/manager/table");
		}
	}

	/**
	 * 経費の入力画面
	 * 
	 *
	 * @param
	 * @return
	 */
	public function edit_cost()
	{
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions('edit_cost');

		// getパラメーターのバリデーション
		$validator = Validator::make(Input::all(), [
			'year_month' => 'required|date_format:Y-m',
			'department_id' => 'integer',
		]);

		if ($validator->fails()) abort('404');

		$this->pass_data['year_month'] = date('Y-m', strtotime(Input::get('year_month')) ) ;

		// 部署の情報を取得
		if (Input::get('department_id'))
		{
			$this->pass_data['department'] = $this->sales_department->find(Input::get('department_id'));
		}

		// 経費を取得
		$department_id = (Input::get('department_id')) ? Input::get('department_id') : 0;
		$this->pass_data['sales_cost'] = $this->sales_cost
				->where('sales_costs.sales_department_id', $department_id)
				->where('sales_cost_year_month', Input::get('year_month'))
				->first();

		if ($this->pass_data['sales_cost'] == NULL)
		{
			$this->pass_data['sales_cost']['sales_cost_value'] = 0;
		}

		return view('sale/manager/edit_cost', $this->pass_data);

	}
	/**
	 * 
	 *
	 * @return Response
	 */
	public function table()
	{
		// バリデーション
		$validator = Validator::make(Input::all(), [
			'year_month' => 'date_format:Y-m',
		]);

		if ($validator->fails()) abort('404');

		// 年月の設定
		if (Input::get('year_month') == NULL)
		{
			$year_month = date('Y-m');
		}
		else
		{
			$year_month = date('Y-m', strtotime(Input::get('year_month')) ) ;
		}

		// 表示期間内の部署のみ取得
		$this->pass_data['departments'] = $this->sales_department->get_display_period($year_month);

		// 売上データの取得
		$month_all_data = $this->sales_week->get_month_data($year_month);
		$this->pass_data['department_data'] = $month_all_data['department_data'];
		$collect_data = $month_all_data['collect_data'];

		// 経費の取得, 計算
		$sales_costs = $this->sales_cost->select(['sales_cost_value', 'sales_department_id'])
				->where('sales_cost_year_month', $year_month)
				->get()
				->toArray();
		$collect_data['total_sales_cost'] = 0;
		foreach ($sales_costs as $sales_cost)
		{
			// 各部署の売上データへ経費を追加
			$this->pass_data['department_data'][$sales_cost['sales_department_id']]['sales_cost'] = $sales_cost;

			// 月の経費の合計額
			$collect_data['total_sales_cost'] += $sales_cost['sales_cost_value'];
		}

		// 利益率の計算 （総売上額-経費総額）/ 総売上額 * 100
		$collect_data['profit_ratio'] = 0;
		if (! empty($collect_data['total_month']['sales_week_result']))
		{
			$collect_data['profit_ratio'] = ($collect_data['total_month']['sales_week_result'] - $collect_data['total_sales_cost']) / $collect_data['total_month']['sales_week_result'] * 100;
			$collect_data['profit_ratio'] = round($collect_data['profit_ratio'], 1);
		}

		// 売上データの種類の取得
		$this->pass_data['type_ary'] = Config::get('const.sales_types');

		$this->pass_data['collect_data'] = $collect_data;

		$this->pass_data['year_month'] = $year_month;

		return view('sale/manager/table', $this->pass_data);
	}

	/**
	 * ajaxで売上金額をDBへ追加・編集
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if (! $request->ajax()) exit();

		// バリデーション
		$validator = Validator::make($request->all(), [
			'sales_type' => 'required|max:20',
			'sales_value' => 'required|numeric|max:1000000000',
			'sales_week_some' => 'required|max:3',
			'sales_department_id' => 'required|integer',
			'sales_week_year_month' => 'required|date_format:Y-m',
		]);

		header("Content-Type: application/json; charset=utf-8");
		if ( ! Util::check_permission('edit_sales') )
		{
			$permission_error = '権限がありません。';
			return json_encode($permission_error, true);
		}
		elseif ($validator->fails()) 
		{
			$errors = $validator->errors()->toArray();
			return json_encode($errors, true);
		}
		else
		{
			// 売上金額をDBへ登録
			$query_result = $this->sales_week->add_or_edit_sales($request);

			if ($query_result)
			{
				// logsテーブルへ保存
				$this->log->create_sale_log($request);
				return json_encode('success');
			}
			else
			{
				return json_encode('fail');;
			}
		}
		exit;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
