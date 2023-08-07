<?php

namespace Itsmattch\NexusHeadless\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Itsmattch\NexusHeadless\Http\Requests\StoreEntityRequest;
use Itsmattch\NexusHeadless\Models\Entity;

class EntityController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Entity::all());
    }

    public function store(StoreEntityRequest $request): JsonResponse
    {
        $entity = Entity::create($request->all());

        return response()->json($entity);
    }

    public function show(Entity $entity): JsonResponse
    {
        return response()->json($entity);
    }

    public function destroy(int $entity): Response
    {
        Entity::destroy($entity);

        return response()->noContent();
    }
}
