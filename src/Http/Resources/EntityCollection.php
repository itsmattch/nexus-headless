<?php

namespace Itsmattch\NexusHeadless\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EntityCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return $this->collection->toArray();
    }
}
