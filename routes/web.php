<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\StandIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\RestaurantIndex;
use App\Http\Livewire\RestaurantTable;

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

Route::get('/', Home::class)->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/restaurants', RestaurantIndex::class)->name('restaurants.index');
    Route::get('/restaurants/{restaurant:name}/table', RestaurantTable::class)->name('restaurants.table');
    Route::get('/tables', StandIndex::class)->name('stands.index');
}); 

require __DIR__.'/auth.php';
