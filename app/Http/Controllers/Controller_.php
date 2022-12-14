<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Calculator_Model;


class CalcController extends Controller
{
    public function show()
    {
        return ('Hello');
    }
    public function Model_Calculator(Calculator_Model $model){
        return view('/resources/views/calc/model_calc.blade.php',$model);
        //$object_model= $object_model->DataCreation(); // обращаемся к методу, который возвращает все данные массивом
        //return view('/resources/views/calc/model_calc.blade.php', $object_model)Ы; // передаем в представление 'model_calc' объект
    }

//public function ViewData_Calculator():array


// return view('/resources/views/calc/viewData_calc.blade.php',$array); // передаем в представление 'model_calc' объект


}

class Home extends Controller{
public function home()
{
return view();
}

}
