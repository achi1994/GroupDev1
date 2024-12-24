<?php

namespace App\Http\Resources\Country;

use App\Http\Resources\City\GetCityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetCountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->resource->id,
            'name'=>$this->resource->name,
            'cities' => GetCityResource::collection($this->resource->cities),
        ];
    }
}
