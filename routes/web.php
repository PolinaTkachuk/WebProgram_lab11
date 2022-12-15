<?php
//пространство имен
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
//Связь контроллера и роутера
Route::get('/passUsingModel',[CalcController::class, 'modelCalculator']);
Route::get('/viewData',[CalcController::class, 'modelViewData']);
// вызов callback функции view composer
Route::get('/viewComposer', function() {
    return view('calc.viewComposer_calc');
});
//home
Route::get('/home', [CalcController::class, 'home']);


Route::get( '/', function() {
    return view('welcome');
});

