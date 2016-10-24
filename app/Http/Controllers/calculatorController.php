<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class calculatorController extends Controller
{
    public function addValues(){
        $c = 2+2;
        return view('index', ['result' => $c]);
    }
}
