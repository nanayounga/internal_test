<?php

use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{	
		DB::beginTransaction();        

		$users = DB::table('users')
			->select(
				'user_id'
			)            
			->get();

		try
		{
			if (count($users))
			{
				foreach ($users as $user)
				{
					DB::table('user_details')->insert([
						'user_id'		=> $user->user_id,                        
						'created_at'    => date('Y-m-d H:i:s')
					]);
				}
			}

			DB::commit();
		}
		catch (\Exception $e)
		{
			DB::rollBack();

			echo "\n" . $e->getMessage() . "\n";
		}

		//DB::table('user_details')->insert($user_details);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
