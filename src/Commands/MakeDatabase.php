<?php

namespace Nookery\Hammer\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakeDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '新建数据库';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');

        if (!preg_match('/^[a-zA-Z0-9_-]{1,64}$/', $name)) {
            $this->error('数据库名称错误');
        } else {
            $databases = DB::select('show databases');
            foreach ($databases as $database) {
                if ($database->Database === $name) {
                    $this->info('数据库 '.$name.' 已存在');

                    return;
                }
            }

            DB::update("create database {$name};");

            $this->info("已新建数据库：".$name);
        }
    }
}
