<?php

namespace App\Actions\Tasks;

use App\Http\Requests\Task\addTaskRequest;
use App\Http\Resources\Task\GetTasksResource;
use App\Models\tasks;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class GetTask extends Action

{
    public function handle()
    {

      return response()->json(GetTasksResource::collection(tasks::all()), 200);

    }

    public function asController():JsonResponse
    {;
        return $this->handle();
    }


}
