<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\IndexStand;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexRestaurant;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/restaurants', IndexRestaurant::class)->name('restaurants.index');
    Route::get('/restaurants/{restaurant}/table', IndexStand::class)->name('restaurants.table');
}); 

require __DIR__.'/auth.php';
