<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    //
    public function show() {

    }

    public function addToCart(Request $request) {
        $validatedData = $request -> validate([
            'username' => 'required|max:100',
            'product_id' => 'required|integer',
            'price' => 'required|string'
        ]);

        $cart = new Cart();
        $options = [
            'username' => $validatedData['username'],
            'product_id' => $validatedData['product_id'], //ID from the product that will be added to the cart
            'price' => str_ireplace([' ', '₦'], '',$validatedData['price'])
        ];

        Log::debug($options);

        if($cart -> fill($options) -> save()) {
            return 'success';
        }

        return 'failed';
    }

    public function deleteFromCart(Request $request) {
        $data = $request -> validate([
           'id' => 'required|numeric'
        ]);

        $id = $data['id'];

        $item = Cart::find($id);

        if($item -> delete()) return redirect() -> back();

        return 'failed';
    }
}
