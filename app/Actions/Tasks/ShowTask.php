<?php

namespace App\Actions\Tasks;

use App\Http\Resources\Task\GetTasksResource;
use App\Models\tasks;
use Lorisleiva\Actions\Action;

class ShowTask extends Action
{
    public function handle(string $id)
    {
        $task = tasks::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        return response()->json(new GetTasksResource($task));
    }

    public function asController(string $id)
    {
        return $this->handle($id);
    }
}
