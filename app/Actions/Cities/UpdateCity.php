<?php

namespace App\Actions\Cities;

use App\Http\Requests\City\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateCity extends Action
{

    public function handle(int $id, array $data) : JsonResponse
    {
        try {
            $city = City::findOrFail($id);

            if (!isset($city)) {
                return response()->json(['message' => 'City not found'], 404);
            }

            $city->name = $data['name'];
            $city->country_id = $data['country_id'];
            $city->save();

            return response()->json(['message' => 'City updated successfully'], 200);
        } catch (\Exception) {
            return response()->json(['message' => 'Server error'], 500);
        }
    }

    public function asController(int $id, UpdateCityRequest $request): JsonResponse
    {
        $updateCityRequest = new UpdateCityRequest();
        return $this->handle(
            $id,
            $request->validate(
                $updateCityRequest->rules(),
            )
        );
    }
}
