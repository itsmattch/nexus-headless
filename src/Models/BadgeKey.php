<?php

namespace Itsmattch\NexusHeadless\Models;

use Illuminate\Database\Eloquent\Model;

class BadgeKey extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'badge_id'];
}