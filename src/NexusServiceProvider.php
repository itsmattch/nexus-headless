<?php

namespace Itsmattch\NexusBridge;

use Illuminate\Support\ServiceProvider;
use Itsmattch\NexusBridge\Console\Generator\MakeActionCommand;
use Itsmattch\NexusBridge\Console\Generator\MakeBlueprintCommand;
use Itsmattch\NexusBridge\Console\Generator\MakeEntityCommand;
use Itsmattch\NexusBridge\Console\Generator\MakeRepositoryCommand;
use Itsmattch\NexusBridge\Console\Generator\MakeResourceCommand;

class NexusServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeActionCommand::class,
                MakeBlueprintCommand::class,
                MakeEntityCommand::class,
                MakeResourceCommand::class,
                MakeRepositoryCommand::class,
            ]);
        }
    }
}