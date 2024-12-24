<?php

namespace App\Actions\Persons;

use App\Http\Resources\Person\GetPersonsResource;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class GetPersons extends Action
{
    public function handle(): JsonResponse
    {
        $persons = Person::all();
        return response()->json(GetPersonsResource::collection($persons), 200);
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }
}
