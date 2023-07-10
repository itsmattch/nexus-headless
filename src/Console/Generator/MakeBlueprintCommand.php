<?php

namespace Itsmattch\NexusBridge\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeBlueprintCommand extends GeneratorCommand
{
    protected $name = 'nexus:make:blueprint';

    protected $description = 'Create new blueprint';

    protected $type = 'Blueprint';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/blueprint.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Blueprints';
    }
}