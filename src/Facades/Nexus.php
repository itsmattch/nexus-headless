<?php

namespace Itsmattch\NexusHeadless\Facades;

use Illuminate\Support\Facades\Facade;

class Nexus extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'nexus';
    }

    public function routes(): void
    {
        static::$app->make('router')->nexus();
    }
}