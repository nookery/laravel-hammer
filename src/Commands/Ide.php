<?php

namespace Nookery\Hammer\Commands;

use Exception;
use Illuminate\Console\Command;

class Ide extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成IDE辅助文件';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $this->call('ide-helper:generate', ['--no-interaction' => true]);
            $this->call('ide-helper:models', [
                '--quiet' => false,
                '--no-interaction' => true,
            ]);
            $this->call('ide-helper:meta', ['--no-interaction' => true]);
            $this->call('ide-helper:macros');
        } catch (Exception $exception) {
            $this->warn('生成IDE辅助文件发生异常');
            $this->error($exception->getMessage());
        }
    }
}
