<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CervezaController extends Controller
{
    public function cerveza()
    {
        return view('cerveza');
    }
}
