<?php

namespace Itsmattch\NexusHeadless\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Itsmattch\NexusHeadless\Http\Requests\StoreEntityRequest;
use Itsmattch\NexusHeadless\Models\Entity;

class EntityController extends Controller
{
    public function index(): Collection
    {
        return Entity::all();
    }

    public function store(StoreEntityRequest $request)
    {
        return Entity::create($request->all());
    }

    public function show(Entity $entity): Entity
    {
        return $entity;
    }

    public function destroy(Entity $entity): void
    {
        $entity->delete();
    }
}
