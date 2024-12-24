<?php

namespace App\Http\Resources\City;

use App\Http\Resources\Country\GetCountryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetCityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'country' => new GetCountryResource($this->whenLoaded('country')),
        ];
    }
}
