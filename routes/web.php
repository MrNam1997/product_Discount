<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('product_infor');
});
Route::post('/discountAmount', function (Request $request) {
    $price = $request->price;
    $percent = $request->percent;
    $discountAmount = ($price * $percent) * 0.1 / 100;
    $discountPrice = $price - $discountAmount;
    return view('discountAmount', compact("discountAmount", "discountPrice"));
});
