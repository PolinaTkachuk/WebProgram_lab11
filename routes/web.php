<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

Route::get('/MyPage',[CalcController::class, 'Model_Calculator']);
Route::get( '/main_', function() {
    return view('welcome');
});
Route::get('/test', 'CalcController@show');

/*
//пространство имен
use App\Http\Controllers\CalcController;
use App\Http\Controllers\Controller;

Route::get('/user', [CalcController::class, 'Model_Calculator']);
//Связь контроллера и роутера

*/
/*Route::get( '/main', function() {
    $object_model= new Calculator_Model; //\App\Models\Calc\; //объект класса Calculator_Model
    return view('calc/model_calc', $object_model);
});
*/
