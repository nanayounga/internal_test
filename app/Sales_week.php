<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Sales_week extends Model {

	protected $table = 'sales_weeks';
	protected $primaryKey = 'sales_week_id';

	/**
	 * 1ヶ月の売上データを取得
	 *
	 * @param   string  $year_month  YYYY-MMの書式の年と月
	 * @return  array   
	 */
	public function get_month_data($year_month)
	{
		$sales_week = $this->where('sales_week_year_month', $year_month)
				->join('sales_departments', 'sales_departments.sales_department_id', '=', 'sales_weeks.sales_department_id')
				->get()
				->toArray();

		// ここからフロント表示用にデータの整形
		$department_data = $collect_data = array();
		$types = array('sales_week_goal', 'sales_week_norma', 'sales_week_result');
		foreach ($sales_week as $sales)
		{
			foreach ($types as $type)
			{
				$sales_department_id = $sales['sales_department_id'];

				// 事業部の週毎の売上
				$department_data[$sales_department_id]['week'][$sales['sales_week_some']][$type] = $sales[$type];

				// 事業部の月の合計の売上
				if (empty($department_data[$sales_department_id]['total_month'][$type]))
				{
					$department_data[$sales_department_id]['total_month'][$type] = 0;
				}
				$department_data[$sales_department_id]['total_month'][$type] += $sales[$type];

				// 全事業部の週の合計の売上
				if (empty($collect_data[$type][$sales['sales_week_some']]))
				{
					$collect_data[$type][$sales['sales_week_some']] = 0;
				}
				$collect_data[$type][$sales['sales_week_some']] += $sales[$type];
			}

			// 全事業部の週の合計のプラマイ。売上金額からノルマを引く
			$total_week_norma = $collect_data['sales_week_norma'][$sales['sales_week_some']];
			$total_week_result = $collect_data['sales_week_result'][$sales['sales_week_some']];

			$collect_data['total_diff'][$sales['sales_week_some']] = bcsub($total_week_result, $total_week_norma, 2);
			

			// 全事業部の週の達成率 (売上 ÷ ノルマ × 100)
			if ($total_week_norma)
			{
				$collect_data['total_ratio'][$sales['sales_week_some']] = $total_week_result / $total_week_norma * 100;
				$collect_data['total_ratio'][$sales['sales_week_some']] = round($collect_data['total_ratio'][$sales['sales_week_some']], 1);
			}
		}

		// 月の合計の計算
		foreach ($types as $type) $collect_data['total_month'][$type] = 0; // 初期値

		foreach ($collect_data as $type => $collect)
		{
			foreach ($collect as $value)
			{
				if (empty($collect_data['total_month'][$type])) $collect_data['total_month'][$type] = 0;
				$collect_data['total_month'][$type] += $value;
			}
		}

		// 月の達成率 (売上 ÷ ノルマ × 100)
		$collect_data['total_month']['total_ratio'] = '';
		if (! empty($collect_data['total_month']['sales_week_result']) && ! empty($collect_data['total_month']['sales_week_norma']))
		{
			$collect_data['total_month']['total_ratio'] = $collect_data['total_month']['sales_week_result'] / $collect_data['total_month']['sales_week_norma'] * 100;
			$collect_data['total_month']['total_ratio'] = round($collect_data['total_month']['total_ratio'], 1);
		}

		return [
			'department_data' => $department_data,
			'collect_data' => $collect_data
		];
	}

	/**
	 * 対象のレコードが存在した場合はupdate、なければinsert
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  bool  dbへの登録結果
	 */
	public function add_or_edit_sales($request)
	{
		$sales_week = $this->where('sales_week_year_month', $request->get('sales_week_year_month'))
				->where('sales_week_some', $request->get('sales_week_some'))
				->where('sales_department_id', $request->get('sales_department_id'))
				->first();

		if ($sales_week)
		{
			$obj = $this->find($sales_week->sales_week_id);
		}
		else
		{
			$obj = $this;
		}

		switch ($request->get('sales_type')) {
			case 'sales_week_goal':
				$obj->sales_week_goal = $request->get('sales_value');
				break;
			case 'sales_week_norma':
				$obj->sales_week_norma = $request->get('sales_value');
				break;
			case 'sales_week_result':
				$obj->sales_week_result = $request->get('sales_value');
				break;
		}
		$obj->sales_week_year_month = $request->get('sales_week_year_month');
		$obj->sales_week_some = $request->get('sales_week_some');
		$obj->sales_department_id = $request->get('sales_department_id');
		$obj->user_id = Session::get('user_id');
		return $obj->save();
	}
}
