<?php

namespace App\Actions\Cities;

use App\Http\Resources\City\GetCityResource;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class GetCity extends Action
{
    public function handle($id):JsonResponse
    {
        $city = City::findOrFail($id);

        if($city){
            return response()->json([new GetCityResource($city)]);
        }

        return response()->json(['message' => "City not found"], 404);
    }

    public function asController($id): JsonResponse
    {
        return $this->handle($id);
    }
}
