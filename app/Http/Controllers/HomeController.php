<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\MathService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected MathService $mathService)
    {
    }

    public function index(Request $request)
    {
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');
        $mathType = $request->input('math-type');
        $solution = $request->input('solution');

        $data = [
            'number1' => $num1,
            'number2' => $num2,
            'mathType' => $mathType,
            'solution' => $solution
        ];

        return view('welcome', $data);
    }

    public function getSolution(Request $request)
    {
        $solution = 0.0;
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');
        $mathType = $request->input('mathType');

        $solution = $this->mathService->doMath($num1, $num2, $mathType);

        return redirect('?number1=' . $num1 . '&number2=' . $num2 . '&math-type=' . $mathType . '&solution=' . $solution);
    }
}
