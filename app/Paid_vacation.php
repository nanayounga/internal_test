<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

//use DB;

class Paid_vacation extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'paid_vacations';
	protected $primaryKey = 'vacation_id';
	protected $fillable = ['user_id', 'vacation_date', 'vacation_reason', 'vacation_type', 'vacation_status'];

	/* vacation type */
	private $vacationTypes = ['AL', 'SL', 'PL', 'CL', 'UL'];

	public function get_vacation_types()
	{

		return $this->vacationTypes;
	}
	/**
	 * @Desc get all user vacation
	 *
	 * @param int $user_id
	 * @param array $params
	 *
	 * @return vacation list by user
	 */
	public function get_vacation_history_by_user($user_id, $params)
	{
		$query = $this->select([
					'vacation_id',
					'vacation_date',
					'vacation_reason',
					'vacation_confirm_by',
					'vacation_status',
					'created_at'
				])
				->where('vacation_status', '!=', 'cancel')
				->where('user_id', $user_id);
		if (!empty($params['from_date']) && !empty($params['to_date']))
		{

			$query = $query->where('paid_vacations.vacation_date', '>=', $params['from_date'])
					->where('paid_vacations.vacation_date', '<=', $params['to_date']);
		}

		$vacations = $query->orderBy('created_at', 'DESC')->paginate(config('const.per_page'));

		return $vacations;
	}

	/**
	 * @Desc get all vacation of user
	 * @param array $params params for filter
	 * @param boelean $only_department TRUE if get all vacation, FALSE if only get list of user in department
	 * @return vacation list of all user
	 */
	public function get_users_vacation_history(array $params, $manage_flag)
	{
		try {
			/* Build query for search */
			$query = User::select(['users.user_id', 'users.user_kanji_last_name', 'users.user_kanji_first_name',  'users.user_email', 'paid_vacations.*'])
					->rightJoin('paid_vacations', 'users.user_id', '=', 'paid_vacations.user_id');
					//->where('vacation_status', '!=', 'cancel');

			if (!empty($params['user_id']))
			{
				$query = $query->where('paid_vacations.user_id', $params['user_id']);
			}
			if (!empty($params['vacation_status']))
			{

				$query = $query->where('paid_vacations.vacation_status', $params['vacation_status']);
			}

			// ログインユーザーが所属する部署の配下の部署を全て取得
			$my_department_child_ids = $this->get_department_child_ids(intval(session('department_id')));

			if (empty($params['department']))
			{
				if (! $manage_flag)
				{
					$query = $query->whereIn('users.department_id', $my_department_child_ids);
				}
			}
			else
			{
				// 指定部署配下の部署を全て取得
				$param_department_child_ids = $this->get_department_child_ids($params['department']);

				// ログインユーザーが所属している部署以外は閲覧できない権限の場合
				if ($manage_flag)
				{
					$department_ids = $param_department_child_ids;
				}
				else
				{
					// 所属部署以外を省く
					foreach ($my_department_child_ids as $department_id)
					{
						if (in_array($department_id, $param_department_child_ids))
						{
							$department_ids[] = $department_id;
						}
					}
				}

				if (!empty($department_ids))
				{
					$query = $query->whereIn('users.department_id', $param_department_child_ids);
				}
				else
				{
					$query = $query->where('users.department_id', 0);
				}
			}

			/* if text_search has value */
			if (!empty($params['text_search']))
			{
				$text = $params['text_search'];

				$query = $query->where(function ($query) use($text)
				{
					$query->orWhere('users.user_kanji_last_name', 'LIKE', '%' . $text . '%')
						->orWhere('users.user_kanji_first_name',  'LIKE', '%' . $text . '%')
						->orWhere('users.user_email', 'LIKE', '%' . $text . '%')
						->orWhere('users.user_id', 'LIKE', '%' . $text . '%');
				});
			}

			/* search by from date to date */
			if (!empty($params['from_date']) && !empty($params['to_date']))
			{

				$query = $query->where('paid_vacations.vacation_date', '>=', $params['from_date'])
						->where('paid_vacations.vacation_date', '<=', $params['to_date']);
			}

			/* order by and sort if request has order by params */
			if (empty($params['order_by']) || empty($params['sort']))
			{
				$results = $query->orderBy('paid_vacations.updated_at', 'DESC')->paginate(config('const.per_page'));
			}
			else
			{
				if ($params['order_by'] === 'user_name')
				{
					$results = $query->orderBy('users.user_kanji_first_name', $params['sort'])
							->orderBy('users.user_kanji_last_name', $params['sort'])
							->paginate(config('const.per_page'));
				}
				else
				{
					$results = $query->orderBy('paid_vacations.' . $params['order_by'], $params['sort'])->paginate(config('const.per_page'));
				}
			}
		} catch (Exception $exc) {
			echo $exc->getTraceAsString();exit;
		}

		return $results;
	}
	/**
	 *
	 * @param int $department_id
	 * @return array List ids department
	 */
	public function get_department_child_ids($department_id){

		$department_ids = [$department_id];

		$department_data = Department::select(['department_id'])->where('department_parent_id_all', 'LIKE', '%,' . $department_id . ',%')->get();

		if($department_data){
			foreach ($department_data as $data) {
				$department_ids[] = $data->department_id;
			}
		}

		return $department_ids;
	}
	/**
	 * @Desc get statistic vacation of all user in per year
	 * @param array $params
	 *
	 * @return array users list in one year
	 */
	public function get_users_vacation_list($params, $manage_flag)
	{
		$query = User::select(['users.user_id', 'users.user_kanji_last_name', 'users.user_kanji_first_name',  'users.user_email'])
					->join('departments', 'departments.department_id', '=', 'users.department_id', 'LEFT');

		// ログインユーザーが所属する部署の配下の部署を全て取得
		$my_department_child_ids = $this->get_department_child_ids(intval(session('department_id')));

		if (empty($params['department']))
		{
			if (!$manage_flag)
			{
				$query = $query->whereIn('users.department_id', $my_department_child_ids);
			}
		}
		else
		{
			// 指定部署配下の部署を全て取得
			$param_department_child_ids = $this->get_department_child_ids($params['department']);

			// ログインユーザーが所属している部署以外は閲覧できない権限の場合
			if ($manage_flag)
			{
				$department_ids = $param_department_child_ids;
			}
			else
			{
				// 所属部署以外を省く
				foreach ($my_department_child_ids as $department_id)
				{
					if (in_array($department_id, $param_department_child_ids))
					{
						$department_ids[] = $department_id;
					}
				}
			}

			if (!empty($department_ids))
			{
				$query = $query->whereIn('users.department_id', $param_department_child_ids);
			}
			else
			{
				$query = $query->where('users.department_id', 0);
			}
		}

		if (!empty($params['text_search']))
		{
			$text = $params['text_search'];

			$query = $query->where(function ($query) use($text) {
				$query->orWhere('users.user_kanji_last_name', 'LIKE', '%' . $text . '%')
						->orWhere('users.user_kanji_first_name', 'LIKE', '%' . $text . '%')
						->orWhere('users.user_email', 'LIKE', '%' . $text . '%')
						->orWhere('users.user_id', 'LIKE', '%' . $text . '%');
			});
		}

		if (!empty($params['vacation_status']))
		{

			$query = $query->join('paid_vacations', 'users.user_id', '=', 'paid_vacations.user_id')
					->where('paid_vacations.vacation_status', $params['vacation_status']);
		}

		$users = $query->groupBy('users.user_id')->paginate(config('const.per_page'));

		if ($users)
		{
			/* calcular $date from and $date to for per current year */
			if (empty($params['year']))
			{
				$date_str_from = date('Y') . '-04-01';
				$next_year = intval(date('Y')) + 1;
			}
			else
			{
				$date_str_from = trim($params['year']) . '-04-01';
				$next_year = intval(trim($params['year'])) + 1;
			}

			$date_str_to = $next_year . '-04-01';

			$date_from = new \DateTime($date_str_from);
			$date_to = new \DateTime($date_str_to);

			foreach ($users as $user)
			{
				$user->number_vacation_day = $this->get_user_number_vacation_day($user['user_id']);
				$user->vacations_data = $this->get_statistic_vacation_by_user($user['user_id'], $date_from, $date_to);
			}
		}

		return $users;
	}
	/**
	 * @desc get number day of default of per user
	 * @param Int $user_id
	 * @return int number day
	 */
	public function get_user_number_vacation_day($user_id) {
		$number_day = 0;

		$user_detail = User_detail::where('user_id',$user_id)->first();

		if($user_detail){
			$number_day = $user_detail->detail_number_vacation_day;
		}

		return $number_day;
	}
	/**
	 * @desc check if vacation of user is reached the limit
	 *
	 * @param Int $user_id
	 * @return int number day
	 */
	public function day_off_is_reached_the_limit($user_id) {
		$number_day = 0;

		$user_detail = User_detail::where('user_id',$user_id)->first();

		if($user_detail){
			$number_day = $user_detail->detail_number_vacation_day;
		}

		$date_str_from = date('Y') . '-04-01';
		$next_year = intval(date('Y')) + 1;

		$date_str_to = $next_year . '-04-01';

		$date_from = new \DateTime($date_str_from);
		$date_to = new \DateTime($date_str_to);
		$total_off = $this->where('user_id', $user_id)
							->where('vacation_status', 'approved')
							->where('vacation_date', '>=', $date_from)
							->where('vacation_date', '<', $date_to)
							->count();

		return ($number_day > $total_off)?FALSE:TRUE ;
	}
	/**
	 * @desc get array date of info for per user
	 *
	 * @param Int $user_id
	 * @param String $date_from
	 * @param String $date_to
	 * @return array $data
	 */
	public function get_statistic_vacation_by_user($user_id,$date_from, $date_to) {

		$data = $this->get_format_array_vacation_for_year();

		$vacations = $this->select([
					'vacation_id',
					'vacation_date',
					'vacation_status'
				])
				->where('user_id', $user_id)
				->whereIn('vacation_status', [config('const.approved_status')])//, config('const.unapproved_status'), config('const.waitting_status')])
				->where('vacation_date', '>=', $date_from)
				->where('vacation_date', '<', $date_to)
				->get();

		if ($vacations)
		{

			$vacations = $vacations->toArray();

			foreach ($vacations as $vacation)
			{

				$month = date('m', strtotime($vacation['vacation_date']));

				if ($vacation['vacation_status'] == 'approved')
				{
					$data['total_off'] += 1;
					$data['vacation_month'][$month]['total_off'] += 1;
					$data['vacation_month'][$month]['detail_off'][]= date('m/d', strtotime($vacation['vacation_date']));

				}
				/*elseif ($vacation['vacation_status'] == 'unapproved')
				{
					$data['vacation_month'][$month]['total_unapprove'] += 1;
				}
				else
				{
					$data['vacation_month'][$month]['total_waitting'] += 1;
				}*/
			}
		}

		return $data;
	}
	/**
	 * @Desc defined format array statistic vacation
	 * @return array $array_format
	 */
	public function get_format_array_vacation_for_year() {
		$array_format =  array(
			'vacation_month' => [
				'04' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'05' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'06' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'07' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'08' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'09' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'10' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'11' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'12' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'01' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'02' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0],
				'03' => ['total_off' => 0, 'total_waitting' => 0, 'total_unapprove' => 0]
			],
			'total_off' => 0
			);

		return $array_format;
	}
	/**
	 * @Desc get info vacation of a user
	 *
	 * @param int $user_id
	 *
	 * @return array info total off , total waitting approve vacation of one user
	 */
	public function get_vacation_infor_by_user($user_id)
	{
		$date_str_from = date('Y') . '-04-01';
		$next_year = intval(date('Y')) + 1;

		$date_str_to = $next_year . '-04-01';

		$date_from = new \DateTime($date_str_from);
		$date_to = new \DateTime($date_str_to);

		$total_off = $this->where('user_id', $user_id)
							->where('vacation_status', 'approved')
							->where('vacation_date', '>=', $date_from)
							->where('vacation_date', '<', $date_to)
							->count();
		$total_waitting = $this->where('user_id', $user_id)
								->where('vacation_status', 'waitting')
								->where('vacation_date', '>=', $date_from)
								->where('vacation_date', '<', $date_to)
								->count();

		$number_vacation_day = $this->get_user_number_vacation_day($user_id);

		return ['total_off' => $total_off, 'total_waitting' => $total_waitting, 'number_vacation_day'=>$number_vacation_day];
	}

	/**
	 * @desc insert a vacation to DB
	 * @param array $params
	 * @return vacation object
	 */
	public function add_vacation(array $params)
	{
		$data = array();

		$data['user_id'] = intval(session('user_id'));
		$data['vacation_date'] = $params['vacation_date'];
		$data['vacation_type'] = $params['vacation_type'];
		$data['vacation_reason'] = $params['vacation_reason'];
		$data['vacation_status'] = config('const.waitting_status');

		return self::create($data);
	}

}
