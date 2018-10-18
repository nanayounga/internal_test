<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');
Route::get('/', 'IndexController@index');

// Route::get('home', 'HomeController@index');


// login
Route::get('login', 'UserAuthController@login');
Route::post('login', 'UserAuthController@store');

// logout
Route::get('logout', 'UserAuthController@logout');

// sale/department
Route::get('sale/department/create', 'Sale\SaleDepartmentController@create');
Route::post('sale/department/store', 'Sale\SaleDepartmentController@store');
Route::get('sale/department/lists', 'Sale\SaleDepartmentController@lists');
Route::get('sale/department/edit/{id}', 'Sale\SaleDepartmentController@edit')->where('id', '[0-9]{1,30}');
Route::post('sale/department/update/{id}', 'Sale\SaleDepartmentController@update')->where('id', '[0-9]{1,30}');

// sale/manager
Route::get('sale/manager/table', 'Sale\SaleManagerController@table');
Route::post('sale/manager/store', 'Sale\SaleManagerController@store');
Route::get('sale/manager/edit-cost', 'Sale\SaleManagerController@edit_cost');
Route::post('sale/manager/store-cost', 'Sale\SaleManagerController@store_cost');
Route::get('sale/manager/year-cost', 'Sale\SaleManagerController@year_cost');

// permission type
Route::get('permission-type/list', 'PermissionTypeController@index');
Route::get('permission-type/create', 'PermissionTypeController@create');
Route::post('permission-type/store', 'PermissionTypeController@store');
Route::get('permission-type/edit/{id}', 'PermissionTypeController@edit')->where('id', '[0-9]{1,30}');
Route::post('permission-type/update/{id}', 'PermissionTypeController@update')->where('id', '[0-9]{1,30}');
Route::get('permission-type/delete/{id}', 'PermissionTypeController@destroy')->where('id', '[0-9]{1,30}');

// permission
Route::get('permission/list', 'PermissionController@index');
Route::get('permission/create', 'PermissionController@create');
Route::post('permission/store', 'PermissionController@store');
Route::get('permission/edit/{id}', 'PermissionController@edit')->where('id', '[a-z_]{1,50}');
Route::post('permission/update/{id}', 'PermissionController@update')->where('id', '[a-z_]{1,50}');
Route::get('permission/delete/{id}', 'PermissionController@destroy')->where('id', '[a-z_]{1,50}');
Route::post('users-permission', 'PermissionController@users_permission');

// minute/group
Route::get('minute/group/create', 'Minute\MinuteGroupController@create');
Route::post('minute/group/create', 'Minute\MinuteGroupController@store');
Route::get('minute/group/lists', 'Minute\MinuteGroupController@lists');
Route::post('minute/group/get_lists', 'Minute\MinuteGroupController@get_lists');
Route::get('minute/group/show/{id}', 'Minute\MinuteGroupController@show')->where('id', '[0-9]{1,30}');
Route::get('minute/group/edit/{id}', 'Minute\MinuteGroupController@edit')->where('id', '[0-9]{1,30}');
Route::post('minute/group/update/{id}', 'Minute\MinuteGroupController@update')->where('id', '[0-9]{1,30}');
Route::post('minute/group/destroy/{id}', 'Minute\MinuteGroupController@destroy')->where('id', '[0-9]{1,30}');

// minute/detail1
Route::get('minute/detail/create/{id}', 'Minute\MinuteDetailController@create')->where('id', '[0-9]{1,30}');
Route::post('minute/detail/store/{id}', 'Minute\MinuteDetailController@store')->where('id', '[0-9]{1,30}');
Route::get('minute/detail/show/{id}', 'Minute\MinuteDetailController@show')->where('id', '[0-9]{1,30}');
Route::get('minute/detail/edit/{id}', 'Minute\MinuteDetailController@edit')->where('id', '[0-9]{1,30}');
Route::post('minute/detail/update/{id}', 'Minute\MinuteDetailController@update')->where('id', '[0-9]{1,30}');
Route::post('minute/detail/destroy/{id}', 'Minute\MinuteDetailController@destroy')->where('id', '[0-9]{1,30}');
Route::get('minute/detail/search/', 'Minute\MinuteDetailController@search');

// mypage
Route::get('mypage/show', 'MypageController@show');
Route::get('mypage/edit', 'MypageController@edit');
Route::post('mypage/update', 'MypageController@update')->where('id', '[0-9]{1,30}');

// user_detail
Route::get('user_detail/edit/{id}', 'UserDetailController@edit')->where('id', '[0-9]{1,30}');
Route::post('user_detail/update/{id}', 'UserDetailController@update')->where('id', '[0-9]{1,30}');

//salary
Route::get('salary/edit/{id}', 'SalaryController@edit')->where('id', '[0-9]{1,30}');
Route::post('salary/update/{id}', 'SalaryController@update')->where('id', '[0-9]{1,30}');
Route::get('salary/show/{id}', 'SalaryController@show')->where('id', '[0-9]{1,30}');
Route::get('salary/create_password', 'SalaryController@create_password');
Route::post('salary/create_password', 'SalaryController@store_password');
Route::get('salary/login/{id}', 'SalaryController@login')->where('user_id', '[0-9]{1,30}');
Route::post('salary/login/{id}', 'SalaryController@store')->where('user_id', '[0-9]{1,30}');
Route::get('salary/export_salary/{type}', 'SalaryController@export_salary');
Route::get('salary/export_log/{type}', 'SalaryController@export_log');
Route::get('salary/import_export', 'SalaryController@import_export');
Route::post('salary/import_salary', 'SalaryController@do_import_salary');
Route::post('salary/import_log', 'SalaryController@do_import_log');
Route::get('salary/log/delete/{id}', 'SalaryController@destroy_log')->where('id', '[0-9]{1,30}');

// user
Route::get('user/create', 'UserController@create');
Route::post('user/create', 'UserController@store');
Route::get('user/lists', 'UserController@lists');
Route::get('user/show/{id}', 'UserController@show')->where('id', '[0-9]{1,30}');
Route::get('user/search', 'UserController@search');
Route::post('user/get_search', 'UserController@get_search');
Route::get('user/edit/{id}', 'UserController@edit')->where('id', '[0-9]{1,30}');
Route::post('user/update/{id}', 'UserController@update')->where('id', '[0-9]{1,30}');
Route::post('user/destroy/{id}', 'UserController@destroy')->where('id', '[0-9]{1,30}');
Route::get('user/edit_permission/{id}', 'UserController@edit_permission')->where('id', '[0-9]{1,30}');
Route::post('user/update_permission/{id}', 'UserController@update_permission')->where('id', '[0-9]{1,30}');

// department
Route::get('department/create', 'DepartmentController@create');
Route::post('department/create', 'DepartmentController@store');
Route::get('department/show/{id}', 'DepartmentController@show')->where('id', '[0-9]{1,30}');
Route::get('department/lists', 'DepartmentController@lists');
Route::get('department/edit/{id}', 'DepartmentController@edit')->where('id', '[0-9]{1,30}');
Route::post('department/update/{id}', 'DepartmentController@update')->where('id', '[0-9]{1,30}');
Route::post('department/destroy/{id}', 'DepartmentController@destroy')->where('id', '[0-9]{1,30}');
//leave
Route::get('paid-vacation', ['as'=>'vacation_list','uses'=>'PaidVacationController@index']);
Route::get('paid-vacation/users-vacation', ['as'=>'vacation_list_admin','uses'=>'PaidVacationController@users_vacation']);
Route::get('paid-vacation/users-vacation-history', ['as'=>'uses_vacation_history_admin','uses'=>'PaidVacationController@users_vacation_history']);
Route::post('paid-vacation/apply', ['as'=>'vacation_apply_leave','uses'=>'PaidVacationController@store']);
Route::get('paid-vacation/edit/{id}', ['as'=>'vacation_edit','uses'=>'PaidVacationController@edit']);
Route::post('paid-vacation/update/{id}', ['as'=>'vacation_update','uses'=>'PaidVacationController@update']);
Route::get('paid-vacation/{id}/{status}', ['as'=>'vacation_change_status','uses'=>'PaidVacationController@change_status'])->where('id', '[0-9]{1,30}');
Route::post('paid-vacation/change-status', ['as'=>'ajax_vacation_change_status','uses'=>'PaidVacationController@ajax_change_status']);
Route::post('paid-vacation/change-temp-status', ['as'=>'ajax_vacation_change_temp_status','uses'=>'PaidVacationController@ajax_change_temp_status']);
Route::get('paid-vacation/user-detail/{id}', 'PaidVacationController@user_detail')->where('id', '[0-9]{1,30}');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// dependent
Route::get('dependent/create/{id}', 'DependentController@create')->where('user_id', '[0-9]{1,30}');
Route::post('dependent/create/{id}', 'DependentController@store')->where('user_id', '[0-9]{1,30}');
Route::get('dependent/show/{id}', 'DependentController@show')->where('id', '[0-9]{1,30}');
Route::get('dependent/lists', 'DependentController@lists');
Route::get('dependent/edit/{id}', 'DependentController@edit')->where('id', '[0-9]{1,30}');
Route::post('dependent/update/{id}', 'DependentController@update')->where('id', '[0-9]{1,30}');
Route::get('dependent/destroy/{id}', 'DependentController@destroy')->where('id', '[0-9]{1,30}');

// log
Route::get('user_detail_log/list', 'UserDetailLogController@index');
Route::get('log/delete/{id}', 'UserDetailLogController@destroy')->where('id', '[0-9]{1,30}');

// cron
Route::get('cron/error_notice', 'CronController@error_notice');

Route::get('user/temp_csv_upload', 'UserController@temp_csv_upload');

//
Route::post('service_worker/regist', 'ServiceWorkerController@regist');







