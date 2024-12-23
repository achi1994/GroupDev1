<?php

namespace App\Actions\Music;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UpdateMusic
{
    public function __invoke(Request $request, $id): JsonResponse
    {
        $music = Music::find($id);

        if (!$music) {
            return response()->json([
                'success' => false,
                'message' => 'Music not found',
            ], 404);
        }

        $music->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Music updated successfully',
            'data' => $music
        ], 200);
    }
}
