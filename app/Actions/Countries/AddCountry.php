<?php

namespace App\Actions\Countries;

use App\Actions\Persons\AddPerson;
use App\Http\Requests\Country\AddCountryRequest;
use App\Http\Resources\Country\GetCountryResource;
use App\Models\Country;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class AddCountry extends Action
{

    public function handle(Array $data): JsonResponse
    {
        $country = Country::create($data);

        return response()->json([
            'message' => 'Country added successfully.',
            'addedCountry' => new GetCountryResource($country)
        ], 201);
    }

    public function asController(AddCountryRequest $request): JsonResponse{
        $addCountryRequest = new AddCountryRequest();

        return $this->handle(
            $request->validate(
            $addCountryRequest->rules()
        ));
    }
}
