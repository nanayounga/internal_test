<?php

class PaidVacationTest extends TestCase {

	public function setUp(){

        //必要らしい
        parent::setUp();

        // ログイン情報を設定
        Session::put('is_login', TRUE);
        Session::put('user_id', 325);
        Session::put('user_name', 'ユニットテスト');
        Session::put('user_email', 'test_user@remcorp.jp');
        Session::put('department_id', 1);

        //artisanコマンドの実行
        // Artisan::call('migrate:refresh');
        // Artisan::call('db:seed');


        //filterが無くなったので使えない（代わりに何かある？）
        //Route::enableFilters();
    }
	/**
	 * 基本的なテスト例
	 *
	 * @return void
	 */
	public function testVacation()
	{
		$this->call('GET', '/vacation');
		$this->assertResponseOk();
	}

}
