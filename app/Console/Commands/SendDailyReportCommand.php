<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendDailyReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-report-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily sales report email to the admin and the sales team.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
