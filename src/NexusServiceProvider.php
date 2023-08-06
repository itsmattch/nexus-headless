<?php

namespace Itsmattch\NexusHeadless;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;
use Itsmattch\NexusHeadless\Console\Generator\MakeActionCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeBlueprintCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeEntityCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeRepositoryCommand;
use Itsmattch\NexusHeadless\Console\Generator\MakeResourceCommand;

class NexusServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('nexus', function () {
            return new Nexus();
        });
    }

    public function boot(): void
    {
        Route::mixin(new NexusHeadlessRouteMethods());

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