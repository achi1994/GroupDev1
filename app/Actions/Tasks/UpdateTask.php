<?php

namespace App\Actions\Tasks;

use App\Http\Requests\Task\addTaskRequest;
use App\Models\tasks;
use Exception;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateTask extends Action
{
    public function handle(int $id)
    {

        try {
            $tasks = tasks::findw($id);


            $tasks->tittle = 'new tittle';

            $tasks -> save();

            return response()->json(['message' => 'Task created successfully']);
        }catch (Exception){
            return  response()->json(['message' => 'server error']);
        }




    }

    public function asController(int $id):JsonResponse
    {;
        return $this->handle($id);
    }
}
