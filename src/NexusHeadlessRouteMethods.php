<?php

namespace Itsmattch\NexusHeadless;

class NexusHeadlessRouteMethods
{
    public function nexus(): callable
    {
        return function () {
            $this->get('hello', function () {
                return 'world';
            });
        };
    }
}