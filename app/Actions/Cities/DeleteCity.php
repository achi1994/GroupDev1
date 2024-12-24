<?php

namespace App\Actions\Cities;

use App\Models\City;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteCity extends Action
{

    public function handle(int $id)
    {
        $city = City::findOrFail($id);

        $city->delete();

        return response()->json(['message' => 'City was successfully deleted']);
    }

    public function asController(int $id): JsonResponse{
        return $this->handle($id);
    }
}
