<?php

namespace Nookery\Best\Commands;

use Illuminate\Console\Command;

class Foo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '用于测试 Artisan 命令';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('bar');
    }
}
