<?php

namespace App\Actions\Persons;

use App\Http\Requests\Person\DeletePersonRequest;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Concerns\AsAction;

class DeletePerson
{
    use AsAction;

    public function handle(int $id): bool
    {
        $person = Person::find($id);

        if (!$person) {
            return false;
        }

        return $person->delete();
    }

    public function asController(DeletePersonRequest $request): JsonResponse{
        $success = $this->handle($request->id);

        if($success){
            return response()->json(['message' => 'Person was successfully deleted'], 200);
        }

        return response()->json(['message' => 'Person was not deleted'], 500);
    }
}
