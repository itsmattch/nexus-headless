<?php

namespace Itsmattch\NexusHeadless\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

/**
 * @property int $id
 * @property int $entity_id
 * @property string $name
 */
class Badge extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'entity_id'];

    public function keys(): Relation
    {
        return $this->hasMany(BadgeKey::class);
    }
}