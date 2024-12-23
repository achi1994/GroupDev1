<?php

namespace App\Actions\Music;

use App\Models\Music;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateMusic
{
    use AsAction;

    public function handle($id, array $data)
    {
        $music = Music::find($id);

        if (!$music) {
            return response()->json([
                'message' => 'Music record not found!',
            ], 404);
        }
        $music->update($data);

        return response()->json([
            'message' => 'Music record updated successfully!',
            'data' => $music,
        ]);
    }
    public function asController(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'artist' => 'sometimes|string|max:255',
            'album' => 'sometimes|string|max:255',
            'genre' => 'sometimes|string|max:255',
            'release_date' => 'sometimes|date',
        ]);

        return $this->handle($id, $validatedData);
    }
}
