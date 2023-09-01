<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\IMathService;
use App\ViewModels\MathViewModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MathController extends Controller
{
    public function __construct(
        protected IMathService $mathService,
    ) {
    }

    public function index(Request $request): View
    {
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');
        $mathType = $request->input('math-type');
        $solution = $request->input('solution');
        $rightOrWrongSolution = $request->input('rightorwrong');

        $viewModel = new MathViewModel(
            $num1,
            $num2,
            $solution,
            $mathType,
            $rightOrWrongSolution
        );

        return view('math', ['data' => $viewModel]);
    }

    public function getSolution(Request $request): RedirectResponse
    {
        $solution = 0.0;
        $num1 = $request->input('number1');
        $num2 = $request->input('number2');
        $mathType = $request->input('mathType');
        $rightOrWrongSolution = $request->input('rightOrWrong');

        $solution = $this->mathService->doMath($num1, $num2, $mathType);

        return to_route('home', [
            'number1' => $num1,
            'number2' => $num2,
            'math-type' => $mathType,
            'solution' => $solution,
            'rightorwrong' => $rightOrWrongSolution
        ]);
    }
}
