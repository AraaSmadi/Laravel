<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
    public function index(Request $request)
    {
       return $request->file('file')->store('docs');
    }
}
