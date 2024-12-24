<?php

namespace App\Http\Resources\Task;

use App\Http\Resources\PersonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetTasksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->tittle,
            'person' =>new PersonResource($this->resource->persons),
            'assignees' => PersonResource::collection($this->assignees),
        ];
    }
}
