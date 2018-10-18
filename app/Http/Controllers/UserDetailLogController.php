<?php

namespace App\Http\Controllers;

use Util;
use Session;
use App\User;
use App\User_detail_log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AccessController;

class UserDetailLogController extends AccessController {
	// ユーザーの権限情報
	private $user_detail_log;

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->user_detail_log = new User_detail_log();
		$this->user = new User();
				
		// 権限編集の権限がないログインアカウントの場合は403
		Util::has_permissions('view_salary');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{		
		if (Session::get('is_login_salary') !== NULL)
		{
			$log_list = $this->user_detail_log->get_log_list();

			foreach ($log_list as $key=>$arr_data)
			{
				$arrContent = json_decode($arr_data['user_detail_log_content']);
				$arr_decode = array();

				foreach ($arrContent as $field=>$value)
				{
					if ($field != 'user_id')
					{
						$arr_decode["$field"] = Util::encode_decode($value);
					}
					else
					{
						$arr_user = $this->user->get_user_info_by_id($value);
						$arr_decode["$field"] = "<a href='/user_detail/edit/". $value ."'>" . $arr_user[0]['user_kanji_last_name'] . $arr_user[0]['user_kanji_first_name'] . "</a>";
					}
				}
				
				$log_list[$key]['user_detail_log_content'] = $arr_decode;
			}
			
			$this->pass_data['log_list'] = $log_list;

			return view('user_detail_log/list', $this->pass_data);
		}
		else
		{
			return redirect('user/detail');
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Session::get('is_login_salary') !== NULL)
		{
			$log = User_detail_log::find($id);

			if ($log)
			{
				$log->delete();

				Session::flash('success_message', '削除しました。');
			}
			else
			{
				Session::flash('fail_message', '削除に失敗しました。');
			}

			return redirect('log/list');
		}
		else
		{
			return redirect('user/search');
		}
	}	
}