<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;



Route::get('/',  [AppController::class,'index']);
Route::get('/movie/{name?}',  [AppController::class,'movie']) ;
Route::get('/categories',  [AppController::class,'categories']);
Route::get('/movie/categories/{name?}', [AppController::class, 'movie_with_cat']);
