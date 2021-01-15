<?php

namespace Nookery\Best\Commands;

use Illuminate\Console\Command;

class Ping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '用于测试Artisan命令';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('pang');
    }
}
