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

// Index
Route::get('/', function () {
    return view('welcome');
});

// Home
Route::get(
    '/home', 
    [CoffeeController::class, 'get_all_coffees']
);

// Add Coffee
Route::get('/addCoffee', function () {
    return view('addCoffee');
});

Route::patch(
    '/addCoffee/store', 
    [CoffeeController::class, 'store_coffee']
);

// Edit Coffee
Route::get(
    '/editCoffee/{id}', 
    [CoffeeController::class, 'get_coffee_by_id']
);

Route::patch(
    '/editCoffee/update/{id}', 
    [CoffeeController::class, 'update_coffee']
);

// Delete Coffee
Route::get(
    '/deleteCoffee/{id}', 
    [CoffeeController::class, 'delete_coffee']
);

