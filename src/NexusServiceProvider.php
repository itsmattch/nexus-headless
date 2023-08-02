<?php

namespace Itsmattch\NexusHeadless;

use Illuminate\Support\ServiceProvider;
use Itsmattch\NexusHeadless\Console\Generator\MakeActionCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeBlueprintCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeEntityCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeRepositoryCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeResourceCommand;

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