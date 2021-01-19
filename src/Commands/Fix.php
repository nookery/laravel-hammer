<?php

namespace Nookery\Hammer\Commands;

use Illuminate\Console\Command;

class Fix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '使用php-cs-fixer格式化代码';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        passthru('./vendor/bin/php-cs-fixer fix -vvv');
    }
}
