<?php

namespace dlai286\BMI\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BMIController extends Controller
{

    public function index(Request $request)
    {
        $bmi = 0;
        if ($request->has('weight') && $request->has('height')) {
            $weight = $request->get('weight');
            $height = $request->get('height');

            $bmi = round($weight / ( $height * $height ), 1);
        };

        return view('bmi::index', compact('bmi'));
    }
}
