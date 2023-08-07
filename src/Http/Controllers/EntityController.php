<?php

namespace Itsmattch\NexusHeadless\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Itsmattch\NexusHeadless\Models\Entity;

class EntityController extends Controller
{
    public function index(): Collection
    {
        return Entity::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:Itsmattch\NexusHeadless\Models\Entity,name'
        ]);

        return Entity::create([
            'name' => $validated['name'],
        ]);
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
