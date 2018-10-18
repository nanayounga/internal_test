<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User_detail extends Model {

	protected $table = 'user_details';
	protected $primaryKey = 'user_id';
	protected $dates = ['deleted_at'];
	
	/**
	 * ユーザーを一人分追加
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  int   user_id
	 */
	public function add_user_detail($request)
	{		
		$params = $request->input();

		$user_detail = $this->where('user_id', $params['user_id'])->first();

		// 更新処理
				
		return $user_detail->save();
	}
	
	/**
	 * グループ情報の更新
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @param   int   $user_id 
	 * @return  boolean
	 */
	public function update_record($request, $user_id)
	{
		$params = $request->input();
		$user_detail = $this->find($user_id);

		$user_detail->detail_gender					= $request->input('detail_gender');
		$user_detail->detail_birthday				= $request->input('detail_birthday');
		$user_detail->detail_zip_code				= $request->input('detail_zip_code');
		$user_detail->detail_address1				= $request->input('detail_address1');
		$user_detail->detail_city					= $request->input('detail_city');
		$user_detail->detail_address2				= $request->input('detail_address2');
		$user_detail->detail_district				= $request->input('detail_district');
		$user_detail->detail_tel					= $request->input('detail_tel');
		$user_detail->detail_emergency_tel			= $request->input('detail_emergency_tel');
		$user_detail->detail_position				= $request->input('detail_position');
		$user_detail->detail_enter_company_date		= $request->input('detail_enter_company_date');
		$user_detail->detail_koyo_kubun				= $request->input('detail_koyo_kubun');
		$user_detail->detail_kisonenkin_bango		= $request->input('detail_kisonenkin_bango');
		$user_detail->detail_koyo_hojin				= $request->input('detail_koyo_hojin');
		$user_detail->detail_koyohoken_bango		= $request->input('detail_koyohoken_bango');
		$user_detail->detail_shakai_hoken			= $request->input('detail_shakai_hoken');
		$user_detail->detail_shaho_shutokubi		= $request->input('detail_shaho_shutokubi');
		$user_detail->detail_shaho_kigo				= $request->input('detail_shaho_kigo');
		$user_detail->detail_shaho_bango			= $request->input('detail_shaho_bango');
		$user_detail->detail_hokensha_bango			= $request->input('detail_hokensha_bango');
		$user_detail->detail_remarks				= $request->input('detail_remarks');
		$user_detail->detail_dependent				= $request->input('detail_dependent');
		$user_detail->detail_my_number				= $request->input('detail_my_number');
		$user_detail->detail_number_vacation_day	= $request->input('detail_number_vacation_day');
		
		if ( $user_detail->save() )
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}
