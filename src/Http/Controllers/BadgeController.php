<?php

namespace Itsmattch\NexusHeadless\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Itsmattch\NexusHeadless\Http\Requests\StoreBadgeRequest;
use Itsmattch\NexusHeadless\Models\Badge;

class BadgeController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Badge::all());
    }

    public function store(StoreBadgeRequest $request): JsonResponse
    {
        $badge = Badge::create($request->all());

        return response()->json($badge, 201);
    }

    public function show(Badge $badge): JsonResponse
    {
        return response()->json($badge);
    }

    public function destroy(int $badge): Response
    {
        Badge::destroy($badge);

        return response()->noContent();
    }
}
