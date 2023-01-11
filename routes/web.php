<?php
 
use App\Http\Controllers\pokemon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalculadoraController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', [HomeController::class, 'principal']);
Route::get('/sobre', [HomeController::class, 'sobre']);
//entre chaves é uma variavel (q nesse caso é a q o user vai dar no url)
Route::get('/soma10/{num}', [CalculadoraController::class, 'soma10']);
Route::get('/soma/{num1}/{num2}',[CalculadoraController::class, 'soma']);

Route::post('/calculadora',[CalculadoraController::class,'calculadora']);
Route::post('/calcular',[CalculadoraController::class, 'calcular']);

Route::get('/pokemon/{nome}',[pokemon::class, 'pokemon']);