<?php

namespace Itsmattch\NexusBridge\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    protected $name = 'make:nexus:action';

    protected $description = 'Create new action';

    protected $type = 'Action';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/action.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Resource\Action';
    }
}