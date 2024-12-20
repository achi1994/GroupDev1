<?php

namespace App\Actions\Products;

use App\Http\Requests\Product\updateProductRequest;
use App\Http\Resources\Product\ProductsResource;
use App\Models\products;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class updateProduct extends Action
{

    public function handle($id, updateProductRequest $request)
    {
        $product = products::findOrFail($id);

        $validatedData = $request->validated();

        $product->update(array_filter($validatedData, function($value){
            return !is_null($value);
        }));

        return response()->json(new ProductsResource($product),200);
    }

    public function asController($id, updateProductRequest $request):JsonResponse
    {
        return $this->handle($id, $request);
    }
}
