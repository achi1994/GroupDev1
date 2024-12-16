<?php

namespace App\Actions\Tasks;

use App\Http\Requests\Task\addTaskRequest;
use App\Models\tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\Request;

class addTasks extends Action
{

    public function handle(array $data)
    {

          tasks::create($data);

          return response()->json(['message' => 'Task created successfully'], 303);

    }

   public function asController(addTaskRequest $request):JsonResponse
    {;
        return $this->handle($request->validated());
    }
}
