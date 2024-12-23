<?php

namespace App\Actions\Music;

use App\Models\Music;
use Illuminate\Http\JsonResponse;

class GetMusic
{
    public function __invoke(): JsonResponse
    {
        $music = Music::all();

        return response()->json([
            'success' => true,
            'data' => $music
        ], 200);
    }
}
