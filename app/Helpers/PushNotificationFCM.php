<?php namespace App\Helpers;

/*
 * @brief   Firebase Cloud Messaging（FCM）を使用してpush通知を送る
 * @param   int 生成する文字列の最大の数値
 * @return  str
 */

function PushNotificationFCM($params)
{
	$data = [
		'registration_ids' => $params['registration_ids'],
		'notification'     => $params['notification'],
		'data'             => $params['data'],
	];

	$header = [
		'Authorization: key = '.$params['token'],
		'Content-Type: application/json',
	];

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $params['url']);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, true);

	$response = curl_exec($curl);

	$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$body = substr($response, $header_size);
	$result = json_decode($body, true);

	curl_close($curl);

	return $result;
}