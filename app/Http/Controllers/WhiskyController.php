<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhiskyController extends Controller
{
    public function whisky()
    {
        return view('whisky');
    }
}
