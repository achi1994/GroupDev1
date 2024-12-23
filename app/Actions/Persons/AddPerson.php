<?php

namespace App\Actions\Persons;

use App\Http\Requests\Person\AddPersonRequest;
use App\Http\Resources\Person\GetPersonsResource;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class AddPerson extends Action
{
    public function handle(array $data): JsonResponse
    {
        $person = Person::create($data);

        return response()->json(
            [
                'message' => 'Person added successfully',
                'addedPerson' => new GetPersonsResource($person)
            ]
        );
    }

    public function asController(AddPersonRequest $request): JsonResponse
    {

        $addPersonRequest = new AddPersonRequest();

        return $this->handle(
            $request->validate(
                $addPersonRequest->rules()
            )
        );
    }
}
