<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class test extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getpost()
    {
        return view('layout');
    }
    public function post()
    {
        $data = "araa";
        return view('layout' , compact('data')) ;
    }
}




