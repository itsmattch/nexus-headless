<?php

namespace Itsmattch\NexusHeadless\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Itsmattch\NexusHeadless\Models\Badge;

class BadgeCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Badge $badge,
    ) {}

    public function broadcastAs(): string
    {
        return 'BadgeCreated';
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('nexus'),
        ];
    }
}
