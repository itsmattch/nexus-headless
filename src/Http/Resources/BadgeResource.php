<?php

namespace Itsmattch\NexusHeadless\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BadgeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'entity_id' => $this->entity_id,
            'keys' => $this->keys,
        ];
    }
}
