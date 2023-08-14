<?php

namespace Itsmattch\NexusHeadless\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Entity extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function badges(): Relation
    {
        return $this->hasMany(Badge::class);
    }
}