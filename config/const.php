<?php

return [
	'app_name' => 'PAS LOG',
	// ログインページ
	'login_url' => 'login',
	'number_paid_vacation_default' => 5,
	'per_page' =>20,

	// 自動ログイン用のtokenの更新時間(秒)
	'token_minutes' => 31536000,

	// 自動ログインで使用するcookie名
	'cookie_auto_login' => 'OLID',

	// cookieに使用するuser_id
	'cookie_user_id' => 'PVID',

	// 売上金額のタイプ
	'sales_types' => [
		'sales_week_goal' => '目標',
		'sales_week_norma' => 'ノルマ',
		'sales_week_result' => '売上',
	],

	'waitting_status' => 'waitting',
	'cancel_status' => 'cancel',
	'approved_status' => 'approved',
	'temp_approved_status' => 'temp_approved',
	'unapproved_status' => 'unapproved',

	'vacation_status' => [
		'waitting' => '承認待ち',
		'cancel' => 'キャンセル',
		'approved' =>'承認',
		'temp_approved' =>'仮承認',
		'unapproved' =>'非承認',
	],

	'password_salary' => 'password_salary',

	'salary_permission_type_id' => 3,

	// Firebase Cloud Messaging（FCM）のauth key
	'fcm_auth_key' => 'AAAAREbSpWk:APA91bFn_61PryVd-1RC-2n4fzntiYLMOWumawIZc9srr0pcTKR8ru75feNEWLJed5pt8DHYmF7yKI4rMLHDJ4p5BGV42Way-4saqCHJe6KnQcNLsr2C-mTMAHj5XesN6QgohzqR8Re_GOpL9rifV5WskGu5knDHBA',

	//
	'fcm_url' => 'https://fcm.googleapis.com/fcm/send',
];