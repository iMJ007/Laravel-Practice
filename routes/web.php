<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

// Route that sends back a string
Route::get('/users', function () {
   return 'Welcome to the users page';
});

// Route that sends back an array. Laravel will automatically convert array to JSON response
Route::get('/users', function () {
    return ['PHP', 'HTML', 'Laravel'];
});

// Route that sends back an array but as a JSON
Route::get('/users', function () {
   return response()->json([
     'name' => 'Shahid',
     'designation' => 'UI Developer'
   ]);
});

// Route that sends back function
Route::get('/users', function () {
    return redirect('/');
});
