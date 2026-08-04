<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TreatmentRequest;
use App\Models\Treatment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TreatmentController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Treatment::ordered()->get());
    }

    public function store(TreatmentRequest $request): JsonResponse
    {
        $treatment = Treatment::create($request->validated());

        return response()->json($treatment, Response::HTTP_CREATED);
    }

    public function show(Treatment $treatment): JsonResponse
    {
        return response()->json($treatment);
    }

    public function update(TreatmentRequest $request, Treatment $treatment): JsonResponse
    {
        $treatment->update($request->validated());

        return response()->json($treatment);
    }

    public function destroy(Treatment $treatment): Response
    {
        $treatment->delete();

        return response()->noContent();
    }
}
