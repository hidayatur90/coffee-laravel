<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addCoffee', function () {
    return view('addCoffee');
});
Route::get('/editCoffee', function () {
    return view('editCoffee');
});

Route::get(
    '/home', 
    [CoffeeController::class, 'get_all_coffees']
);

Route::patch(
    '/addCoffee/store', 
    [CoffeeController::class, 'store_coffee']
);
