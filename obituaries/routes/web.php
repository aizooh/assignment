<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObituaryController;

Route::get('/', [ObituaryController::class, 'HomeIndex' ]);
 Route::post('/submit_obituaries', 'ObituaryController@store')->name('submit_obituaries');
Route::get('/home', 'ObituaryController@HomeIndex')->name('home.index');
 Route::get('/home', [ObituaryController::class, 'HomeIndex'])->name('home.index');



