<?php

namespace App\Actions\Music;

use App\Models\Music;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteMusic
{
    use AsAction;

    public function handle($id)
    {
        $music = Music::find($id);

        if (!$music) {
            return response()->json([
                'message' => 'Music record not found!',
            ], 404);
        }
        $music->delete();

        return response()->json([
            'message' => 'Music record deleted successfully!',
        ], 200);

    }
    public function asController($id)
    {
        return $this->handle($id);
    }

}
