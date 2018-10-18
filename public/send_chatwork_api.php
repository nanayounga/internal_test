<?php
/* 
 * chatwork apiを利用して自動投稿する
 * リモートリポジトリへpushされたタイミングで送信
 *
 */

// 設定内容
$room_id = '78752555';
$branch_name = $_GET['branch'];
$message = <<<EOM
[To:1025719] 進藤 亮太
【社内管理ツール】へPushされました。
ブランチ名: $branch_name
EOM;

// 以下は基本変更する必要なし
$api_key = 'e210a0b29e07367a53a141df2ca958bc';
$option = array( 'body' => $message );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.chatwork.com/v2/rooms/{$room_id}/messages");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-ChatWorkToken: {$api_key}"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($option, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);

header('Content-type: application/json; charset=utf-8');
echo $response;
exit;