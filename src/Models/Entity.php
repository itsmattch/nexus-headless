<?php

namespace Itsmattch\NexusHeadless\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Entity extends Model
{
    protected $guarded = [];

    public function entityType(): Relation
    {
        return $this->belongsTo(EntityType::class);
    }
}