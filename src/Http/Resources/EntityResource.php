<?php

namespace Itsmattch\NexusHeadless\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EntityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'badges' => BadgeResource::collection($this->badges),
        ];
    }
}
