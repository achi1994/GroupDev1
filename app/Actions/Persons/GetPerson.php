<?php

namespace App\Actions\Persons;

use App\Http\Resources\Person\GetPersonsResource;
use App\Models\Person;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class GetPerson extends Action
{

   public function handle($id):JsonResponse{
        $person = Person::findOrfail($id);

        if($person){
            return response()->json(new GetPersonsResource($person));
        }

        return response()->json(['message'=>'Person not found'],404);
   }

   public function asController($id): JsonResponse
   {
        return $this->handle($id);
   }

}
