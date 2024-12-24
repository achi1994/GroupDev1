<?php

namespace App\Actions\Products;

use App\Http\Requests\Product\addProductRequest;
use App\Models\products;
use Lorisleiva\Actions\Action;
use Illuminate\Http\JsonResponse;

class addProduct extends Action
{

    public function handle(array $data)
    {
        products::create($data);

        return response()->json(['message'=>'Product added successfully!'],201);
    }

    public function asController(addProductRequest $request):jsonResponse
    {
        return $this->handle($request->validated());}
}
