<?php

namespace Itsmattch\NexusHeadless;

use Illuminate\Support\Facades\Route;
use Itsmattch\NexusHeadless\Http\Controllers\EntityController;

class NexusHeadlessRouteMethods
{
    public function nexus(): callable
    {
        return function () {
            Route::resource('entities', EntityController::class)->only([
                'index', 'store', 'show', 'destroy'
            ]);
        };
    }
}