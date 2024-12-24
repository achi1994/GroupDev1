<?php

namespace App\Actions\Countries;

use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteCountry extends Action
{

    public function handle(int $id)
    {
        $country = Country::findOrFail($id);

        $country->delete();

        return response()->json(['message' => 'Country deleted successfully']);
    }

    public function asController(int $id): JsonResponse{
        return $this->handle($id);
    }
}
