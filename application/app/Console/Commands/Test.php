<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Components\WBAPI;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $api = new WBAPI();

        $dateFrom = now()->format('Y-m-d');

        $response = $api->request('/api/sales', [
            'dateFrom' => '2020-01-01',
        ]);

        var_dump($response);
    }
}
