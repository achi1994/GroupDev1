<?php

namespace App\Actions\Products;


use App\Http\Resources\Product\ProductsResource;
use App\Models\products;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getSingleProduct extends Action
{

    public function handle($id)
    {
        return response()->json(new ProductsResource(products::findOrFail($id)), 200) ;
    }

    public function asController($id):JsonResponse
    {
        return $this->handle($id);
    }
}
