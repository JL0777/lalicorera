<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogedController extends Controller
{
    public function index()
    {
        return view('loged');
    }
}
