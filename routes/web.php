<?php

use App\Http\Livewire\Showdetail;
use App\Http\Livewire\ShowProject;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/job', function () {
        return view('job');
    })->name('job');

    Route::get('/job/{id}', Showdetail::class)->name('detail');
});



require __DIR__ . '/auth.php';
