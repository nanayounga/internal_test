<?php namespace App\Libraries;

use Config;

class MailTemplate {

	/**
	 * エラーログを5分おきにメールで配信する
	 *
	 * @param   array  $error_list
	 * @return  bool   クエリの結果
	 */
	public static function error_notice($error_list)
	{
		$error = join("\n\n", $error_list);
		switch (env('APP_ENV')) {
			case 'production':
				$env = '本番環境';
				break;

			case 'staging':
				$env = 'ステージング環境';
				break;

			case 'local':
				$env = '開発環境';
				break;
			
			default:
				$env = '開発環境';
				break;
		}

		$message = array(
			'subject' => "【{$env}】". Config::get('const.app_name') . ' エラー検知',
			'content' => <<<EOF
以下のエラーを検知しました。

{$error}
EOF
		);

		return $message;
	}

}
