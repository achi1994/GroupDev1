<?php

namespace App\Actions\Tasks;

use App\Models\tasks;
use Lorisleiva\Actions\Action;

class DeleteTask extends Action
{
    public function handle(string $id)
    {
        $task = tasks::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }

    public function asController(string $id)
    {
        return $this->handle($id);
    }
}
