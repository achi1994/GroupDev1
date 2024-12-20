<?php

namespace App\Actions\Products;



use App\Http\Resources\Product\GetProductsResource;
use App\Models\products;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getProducts extends Action
{

    public function handle()
    {
        return response()->json(GetProductsResource::collection(products::all()), 200);
    }

    public function asController():JsonResponse
    {
        return $this->handle();
    }
}
