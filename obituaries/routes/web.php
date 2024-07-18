<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObituaryController;

Route::get('/', [ObituaryController::class, 'HomeIndex' ]);
Route::post ('submit_obituary', 'ObituaryController@submit_obituary' );

