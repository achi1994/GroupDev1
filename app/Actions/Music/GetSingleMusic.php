<?php

namespace App\Actions\Music;

use App\Models\Music;
use Illuminate\Http\JsonResponse;

class GetSingleMusic
{
    public function __invoke($id): JsonResponse
    {
        $music = Music::find($id);

        if (!$music) {
            return response()->json([
                'success' => false,
                'message' => 'Music not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $music
        ], 200);
    }
}
