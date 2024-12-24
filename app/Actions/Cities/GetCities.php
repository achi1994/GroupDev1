<?php

namespace App\Actions\Cities;

use App\Http\Resources\City\GetCityResource;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class GetCities extends Action
{
    public function handle(): JsonResponse
    {
        $cities = City::all();
        return response()->json(GetCityResource::collection($cities), 200);
    }

    public function asController(): JsonResponse{
        return $this->handle();
    }
}
