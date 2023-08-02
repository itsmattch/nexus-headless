<?php

namespace Itsmattch\NexusHeadless\Console\Generator;

use Illuminate\Console\GeneratorCommand;

class MakeRepositoryCommand extends GeneratorCommand
{
    protected $name = 'nexus:make:repository';

    protected $description = 'Create new repository';

    protected $type = 'Repository';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/repository.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Nexus\Repositories';
    }
}