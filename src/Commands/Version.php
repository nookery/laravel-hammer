<?php

namespace Nookery\Best\Commands;

use Exception;
use Illuminate\Console\Command;

class Version extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '输出版本号';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('-V');
    }
}
