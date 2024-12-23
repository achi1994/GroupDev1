<?php

namespace App\Actions\Music;

use App\Models\Music;
use Lorisleiva\Actions\Concerns\AsAction;

class GetMusic
{
    use AsAction;

    public function handle()
    {
        $music = Music::all();

        return response()->json([
            'message' => 'Music records retrieved successfully!',
            'data' => $music,
        ]);



    }
    public function asController()
    {
        return $this->handle();
    }

}
