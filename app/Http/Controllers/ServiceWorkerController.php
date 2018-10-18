<?php namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service_worker;

use Illuminate\Http\Request;

class ServiceWorkerController extends Controller {
	public function __construct()
	{
		$this->middleware('user_auth');
		$this->service_worker = new Service_worker();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function regist(Request $request)
	{
		if (! $request->ajax()) exit();

		// $this->validate($request, [
		// 	'token' => 'required|max:1000',
		// ]);

		$validator = Validator::make($request->all(), [
			'token' => 'required|max:255',
		]);

		header("Content-Type: application/json; charset=utf-8");

		if ($validator->fails())
		{
			return json_encode('fail');
		}
		else
		{
			if (! $this->service_worker->check_exist(session('user_id'), $request->token) )
			{
				// insert service_workersテーブル
				$service_worker_data = array(
					'user_id' => session('user_id'),
					'service_worker_token' => $request->token,
				);
				$this->service_worker->create_token($service_worker_data);
			}
			return json_encode('success');
		}

	}


}
