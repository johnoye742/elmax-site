<?php

use App\Http\Controllers\AccountControl;
use App\Models\AffiliateProduct;
use App\Models\Product;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = Products::all();
    return view('landing', ['products' => $products]);
}) -> name('home');

Route::get('/shop/categories', function () {
    $categories = ['clothing', 'fashion', 'phones', 'electronics'];
    $products = Product::all();
    if($products != null) {
        return view('shop', ['products' => $products, 'categories' => $categories]);
    }

}) -> name('categories');

Route::get('/shop', function () {
    $products = Product::all();
    if($products != null) {
        return view('shop-all', ['products' => $products]);
   }
}) -> name('shop');

Route::get('/shop/{category}', function ($category) {
    $category = ucfirst($category);
    $products = Product::all() -> where('category', null, $category);
    if($products != null) {
        return view('category', ['products' => $products, 'category' => $category]);
    }

    return '404';
});

Route::get('/admin/add-product', function() {

    return view('add-product');
});

Route::get('/show-data', function () {
    $products = Product::all();
    return $products;
});

Route::post('/admin/add-product', function (Request $request) {
    $product = new Product([
        'name' => $request -> name,
        'price' => $request -> price,
        'category' => $request-> category,
        'image' => $request -> cover,
        'owner' => $request -> owner,
        'price' => $request -> price,
        'description' => $request -> description,
        'link' => $request -> link,
        'product_type' => strtolower($request -> type)
    ]);

    $product -> save();

    return redirect() -> back();
}) -> name('add-product');

Route::post('/admin/add-affiliate-product', function (Request $request) {
    $product = new AffiliateProduct([
        'name' => $request -> name,
        'link' => $request -> link,
        'description' => $request-> description,
        'image' => $request -> cover
    ]);

    $product -> save();

    return redirect() -> back();
}) -> name('add-affiliate-product');

Route::get('/admin/add-affiliate-product', function() {
    return view('add-affiliate-product');
});

Route::get('/affiliate', function () {
    $products = AffiliateProduct::all();
    return view('affiliate', ['products' => $products]);
});

Route::get('/login', function() {
    return view('login');
}) -> name('login');

Route::get('/sign-up', function () {
    return view('sign-up');
}) -> name('sign-up');

Route::post('/create-account', [AccountControl::class, 'createAccount'])
-> name('create-account');

Route::post('/login', function (Request $request) {
    $data = $request -> validate([
        'email' => 'email|required',
        'password' => 'required'
    ]);

    if(Auth::attempt($data)) {
        return 'success';
    }

    return 'failed xD';
})
-> name('enter-account');
