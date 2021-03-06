<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
