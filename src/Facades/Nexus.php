<?php

namespace Itsmattch\NexusHeadless\Facades;

use Illuminate\Support\Facades\Facade;

class Nexus extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nexus';
    }

    public function routes() {
        static::$app->make('router')->nexus();
    }
}