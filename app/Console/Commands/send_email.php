<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class send_email extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to your user';

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
        return 0;
    }
}
