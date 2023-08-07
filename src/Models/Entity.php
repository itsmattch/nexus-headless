<?php

namespace Itsmattch\NexusHeadless\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
}