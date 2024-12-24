<?php

namespace App\Actions\Countries;

use App\Http\Resources\Country\GetCountryResource;
use App\Models\Country;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class GetCountries extends Action
{
    public function handle() : JsonResponse
    {
        $countries = Country::all();
        return response()->json(GetCountryResource::collection($countries), 200);
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }
}
