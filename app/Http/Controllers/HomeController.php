<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index'); // Ensure you have a view named 'index.blade.php' in resources/views
    }
}
