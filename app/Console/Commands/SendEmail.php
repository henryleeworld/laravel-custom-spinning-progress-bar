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
     * Execute the console command.
     */
    public function handle()
    {
        $spinner = $this->spinner(1);
        $spinner->setMessage(__('Loading...'));
        $spinner->start();
        Mail::raw(__('Hello, welcome!'), function ($message) {
            $message->to('henryleeworld@gmail.com', __('Administrator'))->subject(__('Loneliness poses risks as deadly as smoking.'));
            $message->from('googleaistudio-noreply@google.com', __('Google AI Studio'));
        });
        $this->info(__('Command executed successfully!'));
        $spinner->finish();
    }
}
