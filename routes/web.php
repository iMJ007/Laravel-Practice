<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route that sends back a view
Route::get('/products', [ProductController::class, 'index']);

// Pattern is an integer
//Route::get('/products/{name}',
//    [ProductController::class, 'show'])->where('name', '[0-9]+');

// Pattern is an string
Route::get('/products/{name}/{id}',
    [ProductController::class, 'show'])->where([
        'name' => '[a-z]+',
        'id' => '[0-9]+'
]);
