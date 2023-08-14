<?php

namespace Itsmattch\NexusHeadless\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Itsmattch\NexusHeadless\Models\Entity;

class EntityCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Entity $entity,
    ) {}

    public function broadcastAs(): string
    {
        return 'EntityCreated';
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('nexus'),
        ];
    }
}
