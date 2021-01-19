<?php

namespace Nookery\Hammer\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PhpCsFixer\Finder;
use const DIRECTORY_SEPARATOR;
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
        $configFilePath = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'.php_cs.dist';

        // 始终复制，始终以本扩展包的配置文件为标准
        File::copy($configFilePath, base_path('.php_cs.dist'));

        passthru('./vendor/bin/php-cs-fixer fix');
    }
}
