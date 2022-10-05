<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products/categories', [ProductsController::class, 'allCategories']);
Route::get('products', [ProductsController::class, 'allProducts']);
Route::get('products/{product_id}', [ProductsController::class, 'singleProduct']);
Route::get('products/search/{keywords}', [ProductsController::class, 'searchProducts']);
Route::get('products/category/{category_name}', [ProductsController::class, 'productsCategory']);
Route::post('products/add', [ProductsController::class, 'addProducts']);
Route::put('products/{product_id}', [ProductsController::class, 'updateProducts']);
Route::delete('products/{id}', [ProductsController::class, 'deleteProduct']);
