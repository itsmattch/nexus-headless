<?php

namespace Itsmattch\NexusBridge\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeModelCommand extends GeneratorCommand
{
    protected $name = 'nexus:make:model';

    protected $description = 'Create new model';

    protected $type = 'Model';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/model.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Models';
    }
}