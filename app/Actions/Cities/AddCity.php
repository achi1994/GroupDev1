<?php

namespace App\Actions\Cities;

use App\Http\Requests\City\AddCityRequest;
use App\Http\Resources\City\GetCityResource;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class AddCity extends Action
{
    public function handle(array $data): JsonResponse
    {
        $city = City::create($data);

        return response()->json([
           'message' => 'City added successfully',
           'addedCity' => new GetCityResource($city)
        ], 201);
    }

    public function asController(AddCityRequest $request): JsonResponse{
        $addCityRequest = new AddCityRequest();

        return $this->handle(
            $request->validate(
                $addCityRequest->rules()
            ));
    }
}
