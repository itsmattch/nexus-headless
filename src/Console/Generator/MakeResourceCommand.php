<?php

namespace Itsmattch\NexusHeadless\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeResourceCommand extends GeneratorCommand
{
    protected $name = 'nexus:make:resource';

    protected $description = 'Create new resource';

    protected $type = 'Resource';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/resource.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Resources';
    }
}