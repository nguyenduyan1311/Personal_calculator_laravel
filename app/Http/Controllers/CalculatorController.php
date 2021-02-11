<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function calculate(Request $request)
    {
        if ($request->calc == null){
            return view('calculator');
        }
        $result = eval('return '.$request->calc.';');
        return view('calculator', compact(['result']));
    }
}
