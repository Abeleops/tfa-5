<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home';
});

Route::view('/', 'home');






/// sample code for routes

// Route::get('tasks', function () {
//     $data = array(
// 'title' => 'My Tasks',
//              );
//     return view('tasks', $data);
// });
// DISPLAYS DATA 

    