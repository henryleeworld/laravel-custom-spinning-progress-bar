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
        $spinner->setMessage(__('Loading...'));
        $spinner->start();
        Mail::raw(__('Hello, welcome!'), function ($message) {
            $message->to('henryleeworld@gmail.com', '李亨利')->subject(__('Loneliness poses risks as deadly as smoking.'));
            $message->from('vqs81617@cuoly.com','VIQ 股份有限公司');
        });
        $this->info(__('Command executed successfully!'));
        $spinner->finish();
    }
}
