<?php

namespace App\Actions\Persons;

use App\Http\Requests\Person\DeletePersonRequest;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class DeletePerson extends Action
{

    public function handle(int $id)
    {
        $person = Person::findOrFail($id);

        $person->delete();

        return response()->json(['message' => 'Person was successfully deleted'], 200);
    }

    public function asController(int $id): JsonResponse{
        return $this->handle($id);
    }
}
