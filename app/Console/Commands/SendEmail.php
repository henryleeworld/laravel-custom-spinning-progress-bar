<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to a user';

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
     * @return int
     */
    public function handle()
    {
        $spinner = $this->spinner(1);
        $spinner->setMessage('讀取中...');
        $spinner->start();
        Mail::raw('您好，歡迎光臨！', function ($message) {
            $message->to('henryleeworld@gmail.com', '李亨利')->subject('日本第四度捐贈疫苗，外交部感謝並研議協助在台日人施打。');
            $message->from('vqs81617@cuoly.com','VIQ 股份有限公司');
        });
        $this->info('命令執行成功！');
        $spinner->finish();
    }
}
