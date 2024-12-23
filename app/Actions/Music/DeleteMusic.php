<?php

namespace App\Actions\Music;

use App\Models\Music;
use Illuminate\Http\JsonResponse;

class DeleteMusic
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

        $music->delete();

        return response()->json([
            'success' => true,
            'message' => 'Music deleted successfully',
        ], 200);
    }
}
