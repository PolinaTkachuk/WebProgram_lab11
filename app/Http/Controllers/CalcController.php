<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CalculatorModel;

class CalcController extends Controller
{
    public function modelCalculator()
    {
        //$model=new CalculatorModel();
        return view('calc.model_calc')->with(['model' => new CalculatorModel()]);
    }
    public function modelViewData()
    {
        return view('calc.viewData_calc', ['first_number' => mt_rand(0, 10), 'second_number' => mt_rand(0, 10)]);
    }

    public function home()
    {
        return view('calc.home_calc');
    }
}
