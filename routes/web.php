<?php

use App\Http\Livewire\Demo;
use App\Http\Livewire\Dashboard;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/restaurants', RestaurantIndex::class)->name('restaurants.index');
    Route::get('/restaurants/{restaurant:name}/table', RestaurantTable::class)->name('restaurants.table');
    Route::get('/tables', StandIndex::class)->name('stands.index');
    Route::get('/demo', Demo::class)->name('demo');
}); 

require __DIR__.'/auth.php';
