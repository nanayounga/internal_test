<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales_department extends Model {
	use SoftDeletes;

	protected $table = 'sales_departments';
	protected $primaryKey = 'sales_department_id';
	protected $dates = ['deleted_at'];

	// 引数の月が表示期間内のもののみ取得
	public function get_display_period($year_month)
	{
		return $this
				->where('sales_department_start', '<=', $year_month. '-1')
				->where('sales_department_end', '>=', $year_month. '-1')
				->get();
	}

}
