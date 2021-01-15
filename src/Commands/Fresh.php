<?php

namespace Nookery\Hammer\Commands;

use Exception;
use Illuminate\Console\Command;

class Fresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '清理一切缓存，恢复全新状态';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("开始刷新应用\r\n");

        try {
            $this->call('clear');
            $this->info("\r\n");
        } catch (Exception $exception) {
            $this->warn('清理缓存发生异常');
        }

        shell_exec('rm -rf vendor');
        shell_exec('composer install');

        $this->info("\r\n应用刷新成功");
    }
}
