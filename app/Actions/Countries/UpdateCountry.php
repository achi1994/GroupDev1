<?php

namespace App\Actions\Countries;

use App\Http\Requests\Country\UpdateCountryRequest;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class UpdateCountry extends Action
{
    /**
     * Handles the main logic for updating a country.
     */
    public function handle(int $id, array $data): JsonResponse
    {
        $country = Country::find($id);

        if (! $country) {
            return response()->json(['message' => 'Country not found'], 404);
        }

        $country->update(['name' => $data['name']]);

        return response()->json(['message' => 'Country updated successfully'], 200);
    }

    /**
     * Handles the request when used as a controller.
     */
    public function asController(int $id, UpdateCountryRequest $request): JsonResponse
    {
        return $this->handle($id, $request->validated());
    }
}
