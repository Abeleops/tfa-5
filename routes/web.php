<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Home::class, 'index']);
Route::get('home',[Home::class, 'index']);
    