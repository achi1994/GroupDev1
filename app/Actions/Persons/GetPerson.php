<?php

namespace App\Actions\Persons;

use App\Http\Resources\Person\GetPersonsResource;
use App\Models\Person;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class GetPerson extends Action
{

   public function handle($id = null):JsonResponse{
       if(isset($id)){
           $person = Person::find($id);

           if($person){
               return Response()->json(new GetPersonsResource($person));
           }

           return response()->json(['message' => 'Person not found'], 404);
       }

       $persons = Person::all();

       return response()->json(GetPersonsResource::collection($persons));
   }

   public function asController($id = null): JsonResponse
   {
        return $this->handle($id);
   }

}
