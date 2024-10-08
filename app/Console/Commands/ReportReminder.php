<?php

namespace App\Console\Commands;

use App\Jobs\ReportReminderJob;
use Illuminate\Console\Command;

class ReportReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'report reminder';

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
        dispatch(new ReportReminderJob());
        $this->info('Done!');

        return 1;
    }
}
