<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TequilaController extends Controller
{
    public function tequila()
    {
        return view('tequila');
    }
}
