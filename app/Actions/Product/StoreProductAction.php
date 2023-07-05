<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreProductAction
{
    public function storeProduct(Request $request)
    {
        try {
            $product = Product::create([
                'name' => $request->name,
                'product_code' => $request->product_code,
                'type' => $request->type,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,
                'user_id' => $request->user_id,

            ]);
        } catch (\Exception $ex) {
            return back()->withErrors($exception->getMessage());
        }
    }
}
