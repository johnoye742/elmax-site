<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function show() {

    }

    public function addToCart(Request $request) {
        $validatedData = $request -> validate([
            'username' => 'required|max:100',
            'product_id' => 'required|integer',
            'price' => 'required'
        ]);
        
    }
}
