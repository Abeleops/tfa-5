<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tasks extends Controller
{
    public function index() {
        $data = array (
            'title' => 'NightPOS'
        );
        return view('tasks', $data);
    }
}
