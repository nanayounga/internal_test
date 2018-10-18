<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Department extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'departments';
	protected $primaryKey = 'department_id';

	/**
	 * 部署の削除時に配下の部署の各値を更新する
	 *
	 * department_parent_id_allカラムから削除対象のdepartment_idを削除
	 * department_layerの値をカウントダウン
	 * department_parent_idの親部署を入れ替える
	 *
	 * @param   array 主の部署情報
	 * @return  array 取得結果
	 */
	public function delete_department($department_id)
	{
		// 配下の部署を全て取得
		$followers = $this->select([
					'department_id',
					'department_name',
					'department_parent_id',
					'department_parent_id_all',
					'department_layer'
				])
				->where('department_parent_id_all', 'LIKE', '%,' . $department_id. ',%')
				->get();

		// 配下の部署の更新処理
		foreach ($followers as $follower)
		{
			// department_parent_id_allカラムから削除するdepartment_idを削除
			// department_layerの値をカウントダウン
			// department_parent_idの親部署を入れ替える
			$parent_id_all_ary = array_filter(explode(',', $follower->department_parent_id_all));
			$parent_id_all_ary = array_diff($parent_id_all_ary, array($department_id));
			$this->where('department_id', $follower->department_id)
				->update([
					'department_parent_id_all' => ','. join(',', $parent_id_all_ary) . ',',
					'department_layer'         => $follower->department_layer -1,
					'department_parent_id'     => end($parent_id_all_ary)
				]);
		}

	}

	/**
	 * 配下の部署で所属する会員を全て取得
	 *
	 * @param   array 主の部署情報
	 * @return  array 取得結果
	 */
	public function get_child_users($department)
	{
		// 配下の部署を全て取得
		$child_department = Department::orWhere('department_id', $department['department_id'])
				->orWhere('department_parent_id_all', 'LIKE', '%,'. $department['department_id']. ',%')
				->get();

		if ($child_department->count() == 0) return array();

		$department_id_ary = [];
		foreach ($child_department as $department)
		{
			array_push($department_id_ary, $department->department_id);
		}
		
		// ユーザー情報の取得
		$query = User::select('*')
				->join('departments', 'departments.department_id', '=', 'users.department_id')
				->orderBy('departments.department_layer', 'ASC')
				->orderBy('users.created_at', 'ASC');

		$query->where(function ($query2) use ($department_id_ary)
		{
			foreach ($department_id_ary as $department_id)
			{
				$query2->orWhere('users.department_id', $department_id);
			}
		});

		return $query->get();
	}

	/**
	 * 親と子の部署を取得
	 *
	 * @param   array 主の部署情報
	 * @return  array 取得結果
	 */
	public function get_parent_and_child($department)
	{
		$query = Department::orWhere('department_id', $department['department_parent_id'])
			->orWhere('department_parent_id', $department['department_id'])
			->orWhere('department_id', $department['department_id'])
			->orderBy('department_layer', 'ASC');

		return $query->get()->toArray();
	}

	/**
	 * 部署をすべて取得
	 * 階層が上にある部署順でソート
	 *
	 * @param   
	 * @return  obj   取得結果
	 */
	public function get_all()
	{
		$departments = $this->orderBy('department_layer', 'asc')
			->get([
				'department_name',
				'department_id',
				'department_parent_id',
				'department_parent_id_all'
			]);

		return $departments;
	}

	/**
	 * 部署を一つ新規追加
	 *
	 * @param   obj   $request  リクエストパラメーター
	 * @return  bool  クエリ結果
	 */
	public function add_new_department($request)
	{
		$params = $request->input();

		// 所属事務所が選択された場合、所属事務所のdepartment_parent_all_idを取得
		$parent_id_all = '';
		$parent_id_all_ary = [];
		if (! empty($params['department_parent_id']) )
		{
			$department = $this->where('department_id', $request->input('department_parent_id'))
				->first(['department_id', 'department_parent_id_all']);

			$parent_id_all_ary = array_filter(explode(',', $department['department_parent_id_all']));
			array_push($parent_id_all_ary, $params['department_parent_id']);
			$parent_id_all = ',' . join(',', $parent_id_all_ary) . ',';
		}

		// 追加処理
		$this->department_name           = $params['department_name'];
		$this->department_parent_id      = $params['department_parent_id'];
		$this->department_parent_id_all  = $parent_id_all;
		$this->department_layer          = count($parent_id_all_ary);
		return $this->save();
	}

}
