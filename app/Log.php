<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Config;
use App\Sales_department;
use Session;

class Log extends Model {

	protected $table = 'logs';
	protected $primaryKey = 'log_id';

	/**
	 * 売上入力記録を保存
	 *
	 * @param   obj  $request  パラメーター
	 * @return  bool クエリの結果
	 */
	public function create_sale_log($request)
	{
		$params = $request->all();

		$sales_types = Config::get('const.sales_types');

		// 部署名を取得
		$sales_departments = Sales_department::where('sales_department_id', $params['sales_department_id'])
				->first();

		$content_data = [
			'sales_type' => $sales_types[$params['sales_type']],
			'sales_value' => $params['sales_value'],
			'sales_week_some' => $params['sales_week_some'],
			'sales_department' => $sales_departments->sales_department_name,
			'sales_week_year_month' => $params['sales_week_year_month'],
			'user_name' => Session::get('user_name'),
			'user_id' => Session::get('user_id'),
			'created' => date('Y=m-d'),
		];

		$this->log_type = '売上';
		$this->log_content = serialize($content_data);
		$this->user_id = Session::get('user_id');
		return $this->save();
	}
}
