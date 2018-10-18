<?php
/**
	***** 有給のステータスについての説明 *****

	[注意] 現状はALしか使用していない。
	      必要があれば下記の他のステータスを使用する

	■AL (Annual Leave)：年次有給休暇
	基本的に5日間がある
	社員のレベルによってALの合計日数が違う

	■SL (Sick Leave)：病気休暇
	医者の診療録がある場合：75％基本給与をもらう
	子供病気を面倒する場合：75％基本給与をもらう
	出産の場合（女性用、5～14日間）：100%基本給与をもらう
	妊産婦検診（女性用、5日間）：100%基本給与をもらう

	■PL (Personal Leave)：個人的な有給休暇
	葬式：3日間
	結婚式：3日間
	月経期（女性用）：5日間連続で1日30分
	12か月以下の子供を育つ場合：1日1時間

	■CL (Compensatory Leave)：代休の休暇
	休日に出勤する場合はその日の代わりに別の日に休める

	■UL (Unpaid Leave) ：無給休暇
	本人の希望により申請する
*/

namespace App\Http\Controllers;

use Util;
use App\Department;
use App\Paid_vacation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AccessController;

class PaidVacationController extends AccessController {

	private $pass_data = array();
	private $vacation_obj;

	public function __construct()
	{
		parent::__construct();
		$this->middleware('user_auth');
		$this->vacation_obj = new Paid_vacation();
	}

	/**
	 * @Desc defined rules for check validation vacation
	 * @return array rules
	 */
	public function rules()
	{
		$rules = [
			'vacation_date' => 'required|date_format:Y-m-d',
			'vacation_type' => 'required|in:AL'
		];

		return $rules;
	}

	/**
	 * @Desc View for staff apply vacation
	 *
	 * @return View apply vacation
	 */
	public function index(Request $request)
	{
		$user_id = intval(session('user_id'));

		$params = $this->get_params($request);
		$this->pass_data['params'] = $params;

		/* history vacations */
		$this->pass_data['vacations_history'] = $this->vacation_obj->get_vacation_history_by_user($user_id, $params);

		/* get vacation type */
		$this->pass_data['vacation_types'] = $this->vacation_obj->get_vacation_types();

		/* get information vacation by user */
		$this->pass_data['vacation_infor'] = $this->vacation_obj->get_vacation_infor_by_user($user_id);

		/* get vacation status */
		$this->pass_data['vacation_status'] = config('const.vacation_status');

		return view('paid_vacation/apply', $this->pass_data);
	}

	/**
	 * 有給申請内容をDBへ登録
	 *
	 * @param Request $request
	 *
	 * @return View list vacation if success
	 */
	public function store(Request $request)
	{
		$user_id = intval(session('user_id'));
		if($this->vacation_obj->day_off_is_reached_the_limit($user_id))
		{
			Session::flash('fail_message', '有給取得日数の上限を超えましたので、申請できないです。');
			return redirect('paid-vacation')->withInput();
		}

		$validator = Validator::make($request->all(), $this->rules());

		if ($validator->fails())
		{
			Session::flash('fail_message', 'フォームが無効です。もう一度お試しください！');
			return redirect('paid-vacation')
							->withErrors($validator)
							->withInput();
		}
		else
		{
			// add vacation
			$result = $this->vacation_obj->add_vacation($request->all());

			if ($result instanceof Paid_vacation)
			{
				Session::flash('success_message', '追加処理が完了しました。');
			}
			else
			{
				Session::flash('fail_message', '追加処理に失敗しました。');
			}

			return redirect('paid-vacation');
		}
	}

	/**
	 * @Desc View for staff apply vacation
	 *
	 * @return View apply vacation
	 */
	public function user_detail(Request $request, $user_id)
	{
		Util::has_permissions('edit_vacation');

		/* get user info */
		$this->pass_data['user'] = User::find($user_id);
		if ($this->pass_data['user'] == NULL) abort(404);

		$params = $this->get_params($request);
		$this->pass_data['params'] = $params;

		/* history vacations */
		$this->pass_data['vacations_history'] = $this->vacation_obj->get_vacation_history_by_user($user_id, $params);

		/* get vacation type */
		$this->pass_data['vacation_types'] = $this->vacation_obj->get_vacation_types();

		/* get information vacation by user */
		$this->pass_data['vacation_infor'] = $this->vacation_obj->get_vacation_infor_by_user($user_id);

		/* get vacation status */
		$this->pass_data['vacation_status'] = config('const.vacation_status');

		return view('paid_vacation/user_detail', $this->pass_data);
	}

	/**
	 * @Desc View of manager user for display vacation of staff
	 *
	 * @return Response view all staff in one year
	 */
	public function users_vacation(Request $request)
	{
		Util::has_permissions('view_vacation');

		$params = $this->get_params($request);

		$manage_flag = ($this->check_permission('manage_vacation')) ? TRUE : FALSE;

		$users_vacation = $this->vacation_obj->get_users_vacation_list($params, $manage_flag);

		/* history vacations */
		$this->pass_data['users_vacation'] = $users_vacation;

		/* get department list */
		$department = new Department();
		$departments = $department->get_all();
		$this->pass_data['departments'] = $departments;

		/* get vacation status */
		$this->pass_data['vacation_status'] = config('const.vacation_status');

		$this->pass_data['params'] = $params;

		return view('paid_vacation/users_vacation', $this->pass_data);
	}

	/**
	 * @Desc check if user has permission return TRUE, If not redirect to 404 page
	 *
	 * @param Request $request
	 *
	 * @return View for all vacation of user
	 */
	public function users_vacation_history(Request $request)
	{
		Util::has_permissions(['edit_temp_vacation','edit_vacation'], FALSE);

		$params = $this->get_params($request);

		$manage_flag = ($this->check_permission('manage_vacation')) ? TRUE : FALSE;
		$vacations_history = $this->vacation_obj->get_users_vacation_history($params, $manage_flag);

		/* history vacations */
		$this->pass_data['vacations_history'] = $vacations_history;

		/* get vacation type */
		$this->pass_data['vacation_types'] = $this->vacation_obj->get_vacation_types();

		/* get department list */
		$department = new Department();
		$departments = $department->get_all();
		$this->pass_data['departments'] = $departments;

		/* get vacation status */
		$this->pass_data['vacation_status'] = config('const.vacation_status');
		$this->pass_data['params'] = $params;

		return view('paid_vacation/users_vacations_history', $this->pass_data);

	}

	/**
	 * @Desc get params for apply leave
	 *
	 * @param Request $request
	 *
	 * @return array params
	 */
	public function get_params($request)
	{

		$params = array();

		$params['text_search'] = $request->get('text_search', '');
		$params['vacation_status'] = $request->get('vacation_status', '');
		$params['year'] = $request->get('year', date('Y'));
		$params['user_id'] = $request->get('user_id', '');
		$params['department'] = $request->get('department', '');
		$params['from_date'] = $request->get('from_date', '');
		$params['to_date'] = $request->get('to_date', '');

		$params['order_by'] = $request->get('order_by', '');
		$params['sort'] = $request->get('sort', '');

		return $params;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	/* public function create()
	  {
	  $vacations_history = $this->vacation_obj->getLeaveHistoryByUser(auth()->id());
	  $this->pass_data['vacations_history'] = $vacations_history;

	  return view('paid_vacation/apply', $this->pass_data);
	  } */



	/**
	 * @Desc Admin edit vacation of staff
	 *
	 * @param Request object, integer id of vacation
	 *
	 * @return View list vacation of user
	*/
	public function edit($id)
	{
		Util::has_permissions(['edit_temp_vacation','edit_vacation'], FALSE);

		$vacation = Paid_vacation::find($id);

		if ($vacation instanceof Paid_vacation)
		{
			$this->pass_data['vacation'] = $vacation;
			$this->pass_data['user'] = User::find($vacation->user_id);
			$this->pass_data['vacation_status'] = config('const.vacation_status');
			/* get information vacation_types */
			$this->pass_data['vacation_infor'] = $this->vacation_obj->get_vacation_infor_by_user($vacation->user_id);

			return view('paid_vacation/edit', $this->pass_data);
		}
		else
		{
			Session::flash('success_message', '追加処理が完了しました。');

			return redirect()->route('uses_vacation_history_admin');
		}
	}

	/**
	 * @Desc Admin edit vacation of staff
	 *
	 * @param Request object
	 * @param Integer id of vacation
	 *
	 * @return View list vacation of user
	*/
	public function update(Request $request, $id)
	{
		Util::has_permissions(['edit_temp_vacation','edit_vacation'], FALSE);

		$vacation = Paid_vacation::find($id);

		if ($vacation instanceof Paid_vacation)
		{
			$validator = Validator::make($request->all(), $this->rules());


			$check_valid_status = TRUE;
			$vacation_status = $request->get('vacation_status');
			if( ! empty($vacation_status))
			{
				$check_valid_status  = $this->valid_rule_for_vacation_status($vacation, $vacation_status);
			}

			if ($validator->fails() || ! $check_valid_status)
			{
				Session::flash('fail_message', 'フォームが無効です。もう一度お試しください！');
				return redirect('paid-vacation/edit/' . $id)
								->withErrors($validator)
								->withInput();
			}
			else
			{
				$vacation->vacation_date       = $request->vacation_date;
				$vacation->vacation_reason     = $request->vacation_reason;
				if( ! empty($vacation_status))
				{
					$vacation->vacation_status     = $vacation_status;
				}
				$vacation->vacation_type       = $request->vacation_type;
				$vacation->vacation_confirm_by = Session::get('user_id');

				if ($vacation->save())
				{
					Session::flash('success_message', '追加処理が完了しました。');
				}
				else
				{
					Session::flash('fail_message', '何かが間違っていた. もう一度お試しください !');
				}
			}
		}
		else
		{
			Session::flash('fail_message', '追加処理が完了しました。');
		}

		return redirect()->route('uses_vacation_history_admin');
	}

	/**
	* @Desc Change status for vacation
	*
	* @param  int  $id
	* @param  string $status
	*
	* @return Response
	*/
	public function change_status($id, $status)
	{
		$vacation = Paid_vacation::find($id);
		if ($vacation)
		{
			if ($vacation->vacation_status == 'waitting' && $status == 'cancel')
			{
				$vacation->vacation_status = 'cancel';

				$vacation->save();

				Session::flash('success_message', 'リクエストが変更されました。');
			}
			else
			{
				Session::flash('warning_message', 'リクエストは有効ではありません。');
			}
		}
		else
		{
			Session::flash('warning_message', 'この休暇は見つからない。');
		}

		return redirect('paid-vacation');
	}

	/**
	 * @Desc Request ajax change status for vacation
	 *
	 * @param Request Object $request Request object
	 *
	 * @return Json response
	 */
	public function ajax_change_status(Request $request)
	{
		$id = $request->get('id');
		$status = $request->get('status');

		if($this->has_permission_change_status($status))
		{
			$message = '';
			$result = 'ok';
			$vacation = Paid_vacation::find($id);
			if ($vacation)
			{

				if ($this->valid_rule_for_vacation_status($vacation, $status))
				{

					$vacation->vacation_status = $status;
					$vacation->vacation_confirm_by = Session::get('user_id');
					$vacation->save();

					$message = 'リクエストが変更されました。';
				}
				else
				{
					$message = 'リクエストは有効ではありません。';
					$result = 'fail';
				}
			}
			else
			{
				$message = 'この休暇は見つからない。';
				$result = 'fail';
			}

			return response()->json(array('status' => $result, 'data' => ['id' => $id, 'status' => $status], 'message' => $message));
		}
		else
		{
			return response()->json(array('status' => 'fail', 'data' => [], 'message' => "Permission denied!"));
		}
	}

	/**
	 * @desc Check if user has permission change vacation status
	 * @param String $status
	 * @return boolean
	 */
	private function has_permission_change_status($status)
	{
		if($status == config('const.approved_status') AND $this->check_permission('edit_vacation'))
		{
			return TRUE;
		}

		if($status == config('const.temp_approved_status') AND $this->check_permission('edit_temp_vacation'))
		{
			return TRUE;
		}

		return $this->check_permission(['edit_vacation','edit_temp_vacation'], FALSE);
	}

	/**
	 * @desc valid status for vacation
	 * @param Vacation Object $vacation
	 * @param String $status
	 *
	 * @return Boolean TRUE or FALSE
	 */
	private function valid_rule_for_vacation_status($vacation, $status)
	{
		$temp_approved = config('const.temp_approved_status');
		$approved = config('const.approved_status');
		$unapproved = config('const.unapproved_status');
		$waitting = config('const.waitting_status');
		$cancel = config('const.cancel_status');

		if(!in_array($status, [$approved, $temp_approved, $unapproved]))
			return FALSE;


		$has_edit_per = $this->check_permission('edit_vacation');
		$has_edit_temp_per = $this->check_permission('edit_temp_vacation');

		$first_valid = $second_valid = FALSE;
		if($has_edit_per)
		{
			$first_valid = $this->check_for_edit_per($status, $vacation->vacation_status, $approved, $unapproved, $cancel);
		}

		if($has_edit_temp_per)
		{
			$second_valid = $this->check_for_edit_temp_per($status, $vacation->vacation_status, $temp_approved, $unapproved, $waitting);
		}

		return ($first_valid || $second_valid);
	}

	/**
	 * @desc Check valid change status for edit permission
	 * @param type $status
	 * @param type $approved
	 * @param type $temp_approved
	 * @param type $unapproved
	 * @return boolean
	 */
	private function check_for_edit_per($status, $old_status, $approved, $unapproved, $cancel)
	{
		switch ($status)
		{
			case $approved:
				return (($old_status != $approved) AND ($old_status != $cancel));
				break;
			case $unapproved:
				return (($old_status != $unapproved) AND ($old_status != $cancel));
				break;
		}

		return FALSE;
	}
	/**
	 * @desc Check valid change status for edit temp permission
	 * @param String $status
	 * @param String $temp_approved
	 * @param String $unapproved
	 * @param String $waitting
	 * @return boolean
	 */
	private function check_for_edit_temp_per($status, $old_status, $temp_approved, $unapproved, $waitting)
	{
		switch ($status)
		{
			case $temp_approved:
				return ($old_status == $waitting) || ($old_status == $unapproved);
				break;
			case $unapproved:
				return (($old_status == $waitting) || ($old_status == $temp_approved));
				break;
		}

		return FALSE;
	}
}
