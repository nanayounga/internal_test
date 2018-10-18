<?php namespace App\Helpers;

/*
 * @brief   ランダムなパスワードや文字列を生成
 * @param   int 生成する文字列の最小の数値
 * @param   int 生成する文字列の最大の数値
 * @return  str
 */

function RandomValue($s=30, $e=35)
{
	for ($i=$s; $i <= $e ; $i++)
	{
		$num_ary[] = $i;
	}
	shuffle($num_ary);
	$length = $num_ary[0];

	return strtr(substr(base64_encode(openssl_random_pseudo_bytes($length)),0,$length),'/+','_-');
}