<?php

namespace Nookery\Hammer\Commands;

use Illuminate\Console\Command;

use const PHP_VERSION;

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
        $this->info('PHP: '.PHP_VERSION);
        $this->info('Laravel: '.app()->version());

        $this->info("\r");

        $this->info('PHP pcntl: '.$this->extensionLoaded('pcntl'));
        $this->info('PHP Redis: '.$this->extensionLoaded('redis'));
        $this->info('PHP mysqli: '.$this->extensionLoaded('mysqli'));
        $this->info('PHP OPcache: '.$this->extensionLoaded('Zend OPcache'));
    }

    private function extensionLoaded($name = '')
    {
        return extension_loaded($name) ? '已加载' : '未加载';
    }
}
