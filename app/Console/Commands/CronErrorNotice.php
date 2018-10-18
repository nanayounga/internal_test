<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Libraries\MailTemplate;
use Mail;

class CronErrorNotice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'CronErrorNotice';
    protected $name = 'CronErrorNotice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'エラー検知';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 5分ごとにバッチが回るため現在日時と5分前の時間を取得
        $datetime      = date('Y-m-d H:i:s');
        $datetime_from = date('Y-m-d H:i:s', strtotime($datetime . ' -5 min'));

        // 日付に該当するエラーログファイルを取得
        $file_date = date('Y-m-d', strtotime($datetime));
        $file_name = base_path('storage/logs/') . 'laravel-' . $file_date . '.log';
        $file = @file_get_contents($file_name, true);

        if (! $file) exit;
        // 行毎に配列にまとめる
        preg_match_all(
            '/\[.+\].+ERROR: (?:.|\n)+?(?-i)Stack trace:/',
            $file,
            $matches
        );

        foreach ($matches[0] as $key => $matche)
        {
            // 日付部分のみ取得
            preg_match('/([0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2})/', $matche, $date);

            if (empty($date)) continue;

            // 現在時刻より5分以前のものは対象外
            if (strtotime($datetime_from) > strtotime($date[0])) continue;

            $error_list[] = $matche;
        }

        // エラーがあればメール送信
        if (!empty($error_list))
        {
            $template = MailTemplate::error_notice($error_list);

            Mail::raw($template['content'], function($message) use ($template)
            {
                $message->from('info@pasgroup.jp', 'PASGROUP');
                $message->subject($template['subject']);
                $message->to(env('MAIL_MANAGER'));
            });
        }
    }
}