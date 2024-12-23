<?php

namespace App\Actions\Persons;

use App\Http\Requests\Person\UpdatePersonRequest;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class UpdatePerson extends Action
{

    public function handle(int $id, array $data): JsonResponse
    {
        try {
            $person = Person::find($id);

            if (!isset($person)) {
                return response()->json(['message' => 'Person not found'], 404);
            }

            $person->name = $data['name'];
            $person->email = $data['email'];
            $person->age = $data['age'];
            $person->save();

            return response()->json(['message' => 'Person updated successfully', 'person' => $person]);

        } catch (\Exception) {
            return response()->json(['message' => 'Server error'], 500);
        }
    }

    public function asController(int $id, UpdatePersonRequest $request): JsonResponse
    {
        $updatePersonReq = new UpdatePersonRequest();
        return $this->handle(
            $id,
            $request->validate(
                $updatePersonReq->rules()
            )
        );
    }
}
