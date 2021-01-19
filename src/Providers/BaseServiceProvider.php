<?php

namespace Nookery\Hammer\Providers;

use Illuminate\Support\ServiceProvider;
use Nookery\Hammer\Commands\Clear;
use Nookery\Hammer\Commands\Fix;
use Nookery\Hammer\Commands\Foo;
use Nookery\Hammer\Commands\Fresh;
use Nookery\Hammer\Commands\Ide;
use Nookery\Hammer\Commands\Ping;
use Nookery\Hammer\Commands\Version;

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
                Fix::class,
                Fresh::class,
                Foo::class,
                Ide::class,
                Ping::class,
                Version::class,
            ]);
        }
    }
}
