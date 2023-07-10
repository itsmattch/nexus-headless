<?php

namespace Itsmattch\NexusBridge\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeResourceCommand extends GeneratorCommand
{
    protected $name = 'make:nexus:resource';

    protected $description = 'Create new resource';

    protected $type = 'Resource';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/resource.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Resource';
    }
}