<?php

namespace App\Actions\Music;

use App\Http\Requests\Music\AddMusicRequest;
use App\Models\Music;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class AddMusic extends Action
{


    public function handle(array $data)
    {

        $music = Music::create($data);

        return response()->json([
            'message' => 'Music created successfully!',
            'data' => $music,
        ], 201);
    }
    public function asController(AddMusicRequest $request)
    {
        return $this->handle($request->validated());
    }
}
#dsasadsa
