<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HappeningController extends Controller
{
    public function index()
    {
        return view('happening');
    }
}
