<?php

namespace Itsmattch\NexusBridge\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class EntityType extends Model
{
    protected $guarded = [];

    public function entities(): Relation
    {
        return $this->hasMany(Entity::class);
    }
}