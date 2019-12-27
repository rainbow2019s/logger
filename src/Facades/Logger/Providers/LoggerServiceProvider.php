<?php

namespace Rainbow2019s\Logger\Providers;

use Illuminate\Support\ServiceProvider;
use Rainbows\Logger\Facades\Logger\Logger;

class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Boot any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Logger',function($app){
            return new Logger();
        });
    }
}
