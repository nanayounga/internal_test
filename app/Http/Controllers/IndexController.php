<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use App\User;
use Cookie;

class IndexController extends Controller {
	private $pass_data = array();

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('user_auth');
	}

	public function index()
	{
		$this->pass_data['user'] = User::select([
					'users.*', 'users.created_at', 'users.updated_at', 
					'department_name'
				])
				->where('user_id', Session::get('user_id'))
				->join('departments', 'departments.department_id', '=', 'users.department_id', 'left')
				->first();
		return view('index', $this->pass_data);
	}

}
