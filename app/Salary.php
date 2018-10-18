<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model {

	protected $table = 'salaries';
	protected $primaryKey = 'user_id';
		
	/**
	 * add salary
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  boolean
	 */
	public function add_salary($request)
	{		
		$params = $request->input();

		$salary = $this->where('user_id', $params['user_id'])->first();

		// 更新処理
				
		return $salary->save();
	}

}
