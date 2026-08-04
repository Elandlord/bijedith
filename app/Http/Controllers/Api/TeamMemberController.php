<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TeamMemberRequest;
use App\Models\TeamMember;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TeamMemberController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(TeamMember::ordered()->get());
    }

    public function store(TeamMemberRequest $request): JsonResponse
    {
        $member = TeamMember::create($request->validated());

        return response()->json($member, Response::HTTP_CREATED);
    }

    public function show(TeamMember $teamMember): JsonResponse
    {
        return response()->json($teamMember);
    }

    public function update(TeamMemberRequest $request, TeamMember $teamMember): JsonResponse
    {
        $teamMember->update($request->validated());

        return response()->json($teamMember);
    }

    public function destroy(TeamMember $teamMember): Response
    {
        $teamMember->delete();

        return response()->noContent();
    }
}
