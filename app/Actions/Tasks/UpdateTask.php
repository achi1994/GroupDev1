<?php

namespace App\Actions\Tasks;

use App\Http\Requests\Task\UpdateTaskRequest;
use App\Models\tasks;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class UpdateTask extends Action
{
    public function handle(int $id, array $data)
    {
        $task = tasks::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->update($data);
        return response()->json(['message' => 'Task updated successfully']);
    }

    public function asController(int $id, UpdateTaskRequest $request):JsonResponse
    {;
        return $this->handle($id, $request->validated());
    }
}
