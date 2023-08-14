<?php

namespace Itsmattch\NexusHeadless\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Itsmattch\NexusHeadless\Http\Requests\StoreEntityRequest;
use Itsmattch\NexusHeadless\Http\Resources\EntityCollection;
use Itsmattch\NexusHeadless\Http\Resources\EntityResource;
use Itsmattch\NexusHeadless\Models\Entity;

class EntityController extends Controller
{
    public function index(): JsonResponse
    {
        $entities = Entity::all();
        $collection = new EntityCollection($entities);

        return response()->json($collection);
    }

    public function store(StoreEntityRequest $request): JsonResponse
    {
        $entity = Entity::create($request->all());
        $resource = new EntityResource($entity);

        return response()->json($resource, 201);
    }

    public function show(Entity $entity): JsonResponse
    {
        $resource = new EntityResource($entity);

        return response()->json($resource);
    }

    public function destroy(int $entity): Response
    {
        Entity::destroy($entity);

        return response()->noContent();
    }
}
