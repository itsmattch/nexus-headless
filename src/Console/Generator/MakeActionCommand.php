<?php

namespace Itsmattch\NexusHeadless\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    protected $name = 'nexus:make:action';

    protected $description = 'Create new action';

    protected $type = 'Action';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/action.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Resources\Actions';
    }
}