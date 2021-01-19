<?php

namespace Nookery\Hammer\Commands;

use Exception;
use Illuminate\Console\Command;

class Check extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '检查代码';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('开始检查代码');

        try {
            $this->call('fix');
        } catch (Exception $exception) {
            $this->warn('代码修正发生异常');
        }

        try {
            $this->call('test');
        } catch (Exception $exception) {
            $this->warn('单元测试发生异常');
        }

        try {
            $this->call('ide');
        } catch (Exception $exception) {
            $this->warn('生成IDE辅助文件发生异常');
        }
    }
}
