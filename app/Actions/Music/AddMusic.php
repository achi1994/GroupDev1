<?php

namespace App\Actions\Music;

use App\Models\Music;
use App\Http\Requests\Music\AddMusicRequest;
use Illuminate\Http\JsonResponse;

class AddMusic
{
    public function __invoke(AddMusicRequest $request): JsonResponse
    {
        $data = $request->validated();
        $music = Music::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Music added successfully',
            'data' => $music
        ], 201);
    }
}
