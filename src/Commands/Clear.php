<?php

namespace Nookery\Best\Commands;

use Exception;
use Illuminate\Console\Command;

class Clear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '清理一切缓存';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("开始清理一切缓存\r\n");

        try {
            $this->call('config:clear');
        } catch (Exception $exception) {
            $this->warn('清理配置缓存发生异常');
        }

        try {
            $this->call('view:clear');
        } catch (Exception $exception) {
            $this->warn('清理视图缓存发生异常');
        }

        try {
            $this->call('route:clear');
        } catch (Exception $exception) {
            $this->warn('清理路由缓存发生异常');
        }

        try {
            $this->call('cache:clear');
        } catch (Exception $exception) {
            $this->warn('清理应用缓存发生异常');
        }

        try {
            $this->call('clear-compiled');
        } catch (Exception $exception) {
            $this->warn('清理已编译文件发生异常');
        }

        $this->info("\r\n缓存清理成功");
    }
}
