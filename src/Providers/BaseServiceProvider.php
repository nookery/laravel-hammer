<?php

namespace Nookery\Best\Providers;

use Illuminate\Support\ServiceProvider;
use Nookery\Best\Commands\Clear;
use Nookery\Best\Commands\Foo;
use Nookery\Best\Commands\Fresh;
use Nookery\Best\Commands\Ping;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Clear::class,
                Fresh::class,
                Foo::class,
                Ping::class,
            ]);
        }
    }
}
