<?php

namespace Nookery\Best\Providers;

use EstGroupe\Taggable\Contracts\TaggingUtility;
use EstGroupe\Taggable\Util;
use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Ping
            ]);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TaggingUtility::class, function () {
            return new Util;
        });
    }

    /**
     * (non-PHPdoc)
     * @see \Illuminate\Support\ServiceProvider::provides()
     */
    public function provides()
    {
        return [TaggingUtility::class];
    }
}
