<?php

namespace App\Actions\Countries;

use App\Http\Resources\Country\GetCountryResource;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Concerns\AsAction;

class GetCountry
{
    use AsAction;

    public function handle($id): JsonResponse
    {
        $country = Country::findOrFail($id);

        if($country){
            return response()->json(new GetCountryResource($country));
        }

        return response()->json(['error' => 'Country not found'], 404);
    }

    public function asController($id): JsonResponse
    {
        return $this->handle($id);
    }
}
