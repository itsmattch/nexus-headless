<?php

namespace Itsmattch\NexusHeadless\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Itsmattch\NexusHeadless\Http\Requests\StoreBadgeRequest;
use Itsmattch\NexusHeadless\Http\Resources\BadgeCollection;
use Itsmattch\NexusHeadless\Http\Resources\BadgeResource;
use Itsmattch\NexusHeadless\Models\Badge;

class BadgeController extends Controller
{
    public function index(): JsonResponse
    {
        $badges = Badge::all();
        $collection = new BadgeCollection($badges);

        return response()->json($collection);
    }

    public function store(StoreBadgeRequest $request): JsonResponse
    {
        $keys = array_map(function ($name) {
            return ['name' => $name];
        }, $request->keys);

        $badge = Badge::create($request->all());
        $badge->keys()->createMany($keys);

        $resource = new BadgeResource($badge);

        return response()->json($resource, 201);
    }

    public function show(Badge $badge): JsonResponse
    {
        $resource = new BadgeResource($badge);

        return response()->json($resource);
    }

    public function destroy(int $badge): Response
    {
        Badge::destroy($badge);

        return response()->noContent();
    }
}
