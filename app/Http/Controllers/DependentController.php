<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Dependent;
use Session;
use DB;
use App\User;

class DependentController extends Controller {
	private $pass_data = array();

	public function __construct()
	{
		$this->middleware('user_auth');
		$this->user = new User();
		$this->dependent = new Dependent();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	
	/**
	* Show the form for creating a new resource.
	*
	* @param  integer $user_id
	* @return  Response
	*/
	public function create($user_id)
	{			
		// 基本情報の取得
		$this->pass_data['user'] = User::find($user_id);
		if ($this->pass_data['user'] == NULL) abort(404);
				
		$this->pass_data['dependent'] = $this->dependent->get_all();
		return view('dependent/create', $this->pass_data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  array $request
	 * @param  integer $user_id
	 * @return Response
	 */
	public function store(Request $request, $user_id)
	{ 		
		$this->validate($request, [
			'dependent_kanji_last_name'	=> 'required',
			'dependent_kanji_first_name'=> 'required',
			'dependent_kata_last_name'	=> 'required',
			'dependent_kata_first_name'	=> 'required',
			'dependent_gender'			=> 'required',
			'dependent_relative'		=> 'required',
			'dependent_social'			=> 'required',
			'dependent_tax'				=> 'required',
			'dependent_birthday'		=> 'required',
			'dependent_social_insurrance'	=> 'required',
			'dependent_address'			=> 'required',					
		]);

		// departmentテーブルへ新規追加
		$result = $this->dependent->add_new_dependent($request, $user_id);

		if ($result)
		{
			Session::flash('notice', '追加処理が完了しました。');
			return redirect('dependent/create/'.$user_id);
		}
		else
		{
			Session::flash('notice', '追加処理に失敗しました。');
			return redirect('dependent/create/'.$user_id);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// 部署情報を取得
		$this->pass_data['dependent'] = Dependent::where('dependent_id', $id)->first();
		if ($this->pass_data['dependent'] == NULL) abort('404');
		$this->pass_data['dependent'] = $this->pass_data['dependent']->toArray();
		
		$this->pass_data['user'] = User::find($this->pass_data['dependent']['user_id']);
		if ($this->pass_data['user'] == NULL) abort(404);

		return view('dependent/show', $this->pass_data);
	}

	/**
	 * Display department list
	 *
	 * @param 
	 * @return Response
	 */
	public function lists()
	{
		$this->pass_data['dependents'] = Department::select(['dependent_id', '	dependent_kanji_last_name', '	dependent_kanji_first_name'])
//				->where('user_id', $user_id)
				->orderBy('dependent_id', 'DESC')				
				->get();
		return view('dependent/lists', $this->pass_data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// 部署情報の取得
		$this->pass_data['dependent'] = Dependent::select('*')
				->where('dependent_id', $id)
				->first()
				->toArray();
		
		// バリデーションで戻ってきた場合、入力値とDBの会員情報をマージする
		$old_params = old();
		if (! empty($old_params['_token']))
		{
			$this->pass_data['dependent'] = array_merge($this->pass_data['dependent'], $old_params);
		}

		// 部署一覧取得
		$this->pass_data['dependents_all'] = $this->dependent->get_all();
		
		// 基本情報の取得
		$this->pass_data['user'] = User::find($this->pass_data['dependent']['user_id']);
		if ($this->pass_data['user'] == NULL) abort(404);
		$this->pass_data['dependent']['age'] = intval(date('Y', time() - strtotime($this->pass_data['dependent']['dependent_birthday']))) - 1970;
				
		return view('dependent/edit', $this->pass_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  array  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{		
		Session::flash('update_dependent_id', $id);

		$this->validate($request, [
			'dependent_kanji_last_name'	=> 'required',
			'dependent_kanji_first_name'=> 'required',
			'dependent_kata_last_name'	=> 'required',
			'dependent_kata_first_name'	=> 'required',
			'dependent_gender'			=> 'required',			
			'dependent_relative'		=> 'required',			
			'dependent_social'			=> 'required',			
			'dependent_tax'				=> 'required',			
			'dependent_birthday'		=> 'required',			
			'dependent_social_insurrance'	=> 'required',			
			'dependent_address'			=> 'required',		
		]);
		
		$query_result = $this->dependent->update_record($request, $id);
		
		if ($query_result)
		{
			Session::flash('notice', '更新処理が完了しました。');
			return redirect("dependent/edit/{$id}");
		}
		else
		{
			Session::flash('notice', '更新処理に失敗しました。');
			return redirect("dependent/edit/{$id}");
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
		$this->pass_data['dependent'] = Dependent::find($id);
		Dependent::destroy($id);
		Session::flash('notice', '削除しました。');
		return redirect("user_detail/edit/".$this->pass_data['dependent']['user_id']);
	}

}
