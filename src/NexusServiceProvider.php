<?php

namespace Itsmattch\NexusBridge;

use Illuminate\Support\ServiceProvider;
use Itsmattch\NexusBridge\Console\Generator\MakeActionCommand;
use Itsmattch\NexusBridge\Console\Generator\MakeModelCommand;
use Itsmattch\NexusBridge\Console\Generator\MakeResourceCommand;

class NexusServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeResourceCommand::class,
                MakeActionCommand::class,
                MakeModelCommand::class,
            ]);
        }
    }
}