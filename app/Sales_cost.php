<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Sales_cost extends Model {

	protected $table = 'sales_costs';
	protected $primaryKey = 'sales_cost_id';

	/**
	 * 経費金額の登録
	 *
	 * @param   obj    $request
	 * @return  bool   クエリの結果
	 */
	public function insert_or_update($request)
	{
		$sales_department_id = ($request->get('sales_department_id')) ? $request->get('sales_department_id'): 0;
		$sales_cost = $this->where('sales_cost_year_month', $request->get('sales_cost_year_month'))
				->where('sales_department_id', $sales_department_id)
				->first();

		$obj = ($sales_cost) ? $this->find($sales_cost->sales_cost_id) : $this;

		$obj->sales_department_id = $sales_department_id;
		$obj->sales_cost_year_month = $request->sales_cost_year_month;
		$obj->sales_cost_value = $request->sales_cost_value;
		$obj->user_id = Session::get('user_id');
		$obj->save();

		return $obj->save();
	}
}
