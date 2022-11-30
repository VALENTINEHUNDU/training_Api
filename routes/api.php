<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/products/search/{name}',[ProductsController::class,'search']);
Route::resource('products',ProductsController::class);
// Route::get('/products',[ProductsController::class,'index']);
// Route::post('/products',[ProductsController::class,'store']);






//  return Product::create([
//      'name'=>'Product one',
//      'slug'=>'Product-one',
//      'description'=>'This is product one',
//      'price'=>'99.99'
//  ]);
// });

Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::get('/products/search/{name}',[ProductsController::class,'search']);
});

