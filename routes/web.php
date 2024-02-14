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

Route::get('/', function () {
    return view('pages/homepage', ['title' => 'TradersUnited']);
});

Route::get('/risk-protection-program', function () {
    return view('pages/risk-protection-program', ['title' => 'TradersUnited | Risk Protection Program']);
});

Route::get('/unity-gains', function () {
    return view('pages/unity-gains', ['title' => 'TradersUnited | Unity Gains']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
