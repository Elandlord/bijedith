<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PricingTierRequest;
use App\Models\PricingTier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PricingTierController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(PricingTier::ordered()->get());
    }

    public function store(PricingTierRequest $request): JsonResponse
    {
        $tier = PricingTier::create($request->validated());

        return response()->json($tier, Response::HTTP_CREATED);
    }

    public function show(PricingTier $pricingTier): JsonResponse
    {
        return response()->json($pricingTier);
    }

    public function update(PricingTierRequest $request, PricingTier $pricingTier): JsonResponse
    {
        $pricingTier->update($request->validated());

        return response()->json($pricingTier);
    }

    public function destroy(PricingTier $pricingTier): Response
    {
        $pricingTier->delete();

        return response()->noContent();
    }
}
