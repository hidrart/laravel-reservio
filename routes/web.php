<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexRestaurant;
use App\Http\Controllers\StandController;
use App\Http\Controllers\RestaurantController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/restaurants', [RestaurantController::class,  'index'])->name('restaurants.index');
    Route::get('/restaurants/{id}/table', [RestaurantController::class,  'showTable'])->name('restaurants.table');
}); 

require __DIR__.'/auth.php';
