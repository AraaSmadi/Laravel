<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\SayhelloController;
class calController extends Controller
{
//     public function cal(){
//     return view('calculater');
// }
    public function index(Request $request)
    {
        $firstnumber = $request->input('firstnumber');
        $secoundnumber = $request->input('secoundnumber');
        $operetor = $request->input('operator');
        $result = 0;
        if ($operetor == '+') {
            $result =  $firstnumber + $secoundnumber;
        }elseif ($operetor == '-') {
            $result =  $firstnumber - $secoundnumber;
        }elseif ($operetor == '/') {
            $result =  $firstnumber / $secoundnumber;
        }elseif ($operetor == '*') {
            $result =  $firstnumber * $secoundnumber;
        }else {
            $result = 0 ;
        }

        return view('calculater', compact('result'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecalculterRequest  $request
     * @return \Illuminate\Http\Response
     */

}
