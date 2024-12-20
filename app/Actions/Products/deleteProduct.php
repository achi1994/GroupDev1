<?php

namespace App\Actions\Products;

use App\Models\products;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class deleteProduct extends Action
{

    public function handle($id)
    {
        $product = products::findOrFail($id);

        $product->delete();

        return response()->json(['message'=>'Product deleted successfully!'],200);
    }

    public function asController($id):JsonResponse
    {
        return $this->handle($id);
    }
}
