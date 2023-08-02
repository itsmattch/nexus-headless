<?php

namespace Itsmattch\NexusHeadless\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeEntityCommand extends GeneratorCommand
{
    protected $name = 'nexus:make:entity';

    protected $description = 'Create new entity';

    protected $type = 'Entity';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/entity.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Entities';
    }
}