<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model {

	protected $table = 'districts';
	protected $primaryKey = 'id';
	
	/**
	 * get all cities
	 * sort by name asc
	 *
	 * @param   
	 * @return  obj   取得結果
	 */
	public function get_all()
	{
		$districts = $this->orderBy('district_name', 'asc')
			->get([
				'district_id',
				'district_name'
			]);

		return $districts;
	}

}
