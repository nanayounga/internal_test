<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dependent extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dependents';
	protected $primaryKey = 'dependent_id';

	/**
	 * get dependent from id
	 *
	 * @param   integer $dependent_id
	 * @return  array $dependent
	 */
	public function get_dependent_by_id($dependent_id)
	{
		// 配下の部署を全て取得
		$dependent = $this->select('*')
				->where('dependent_id', $dependent_id)
				->get();

		return $dependent;
	}
	
	/**
	 * get dependent from user_id
	 *
	 * @param   integer $user_id
	 * @return  array $dependent
	 */
	public function get_dependent_by_user_id($user_id)
	{
		// 配下の部署を全て取得
		$dependent = $this->select('*')
				->where('user_id', $user_id)
				->get();

		return $dependent;
	}
	
	/**
	 * get all dependents
	 *
	 * @param   
	 * @return  obj   dependent
	 */
	public function get_all()
	{
		$dependents = $this->orderBy('dependent_id', 'desc')
			->get();

		return $dependents;
	}

	/**
	 * add new dependent
	 *
	 * @param   array   $request
	 * @param   obj   $user_id
	 * @return  bool  クエリ結果
	 */
	public function add_new_dependent($request, $user_id)
	{
		$params = $request->input();

		// 追加処理
		$this->dependent_kanji_last_name		= $params['dependent_kanji_last_name'];
		$this->dependent_kanji_first_name		= $params['dependent_kanji_first_name'];
		$this->dependent_kata_last_name		= $params['dependent_kata_last_name'];
		$this->dependent_kata_first_name		= $params['dependent_kata_first_name'];
		$this->dependent_gender			= $params['dependent_gender'];
		$this->dependent_relative		= $params['dependent_relative'];
		$this->dependent_social			= $params['dependent_social'];
		$this->dependent_tax			= $params['dependent_tax'];
		$this->dependent_birthday		= $params['dependent_birthday'];
		$this->dependent_retire_code		= $params['dependent_retire_code'];
		$this->dependent_tel				= $params['dependent_tel'];
		$this->dependent_social_insurrance	= $params['dependent_social_insurrance'];
		$this->dependent_insurance_join_date		= $params['dependent_insurance_join_date'];
		$this->dependent_insurance_card	= $params['dependent_insurance_card'];
		$this->dependent_social_insurance_number	= $params['dependent_social_insurance_number'];
		$this->dependent_address		= $params['dependent_address'];
		$this->dependent_post_code		= $params['dependent_post_code'];
		$this->dependent_post_address	= $params['dependent_post_address'];		
		$this->user_id					= $user_id;
		
		return $this->save();
	}
	
	/**
	 * @desc delete dependent by user_id
	 *	 
	 * @param   int    $user_id
	 * @return  boolean value
	 */
	public function delete_by_user_id($user_id)
	{
		$delete = true;
		if ($this->where('user_id', $user_id)->count() > 0)
		{
			/* delete old user permission */
			$delete = $this->where('user_id', $user_id)->delete();
		}
		if ($delete)
		{
			return true;
		}

		return false;
	}

	/**
	 * グループ情報の更新
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   int   $dependent_id 
	 * @return  boolean
	 */
	public function update_record($request, $dependent_id)
	{		
		$params = $request->input();
		$dependent = $this->find($dependent_id);

		$dependent->dependent_kanji_last_name		= $params['dependent_kanji_last_name'];
		$dependent->dependent_kanji_first_name		= $params['dependent_kanji_first_name'];
		$dependent->dependent_kata_last_name		= $params['dependent_kata_last_name'];
		$dependent->dependent_kata_first_name		= $params['dependent_kata_first_name'];
		$dependent->dependent_gender				= $params['dependent_gender'];
		$dependent->dependent_relative				= $params['dependent_relative'];
		$dependent->dependent_social				= $params['dependent_social'];
		$dependent->dependent_tax					= $params['dependent_tax'];
		$dependent->dependent_birthday				= $params['dependent_birthday'];
		$dependent->dependent_retire_code			= $params['dependent_retire_code'];
		$dependent->dependent_tel					= $params['dependent_tel'];
		$dependent->dependent_social_insurrance		= $params['dependent_social_insurrance'];
		$dependent->dependent_insurance_join_date	= $params['dependent_insurance_join_date'];
		$dependent->dependent_insurance_card		= $params['dependent_insurance_card'];
		$dependent->dependent_social_insurance_number	= $params['dependent_social_insurance_number'];
		$dependent->dependent_address		= $params['dependent_address'];
		$dependent->dependent_post_code		= $params['dependent_post_code'];
		$dependent->dependent_post_address	= $params['dependent_post_address'];
		
		if ( $dependent->save() )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
