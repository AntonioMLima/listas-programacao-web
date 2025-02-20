<?php

use Dotenv\Util\Regex;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    return "Seja bem vindo!";
});

Route::get('/exer1', function(){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('ex1', function() {
    return view('lista-exercicios.ex1');
});


Route::post('listaex1', function(Request $request) {
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));

    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista-exercicios.ex1', compact('media'));
});


Route::get('/ex2', function() {
    return view('lista-exercicios.ex2');
});

Route::post('listaex2', function(Request $request) {
    $tempC = floatval($request->input('tempC'));
    $tempF = $tempC * 1.8 + 32;
    return view('lista-exercicios.ex2', compact('tempF'));
});

Route::get('ex3', function() {
    return view('lista-exercicios.ex3');
});

Route::post('listaex3', function(Request $request){
   $tempF = floatval($request->input('tempF'));
   $tempC = ($tempF - 32) / 1.8; 
   return view('lista-exercicios.ex3', compact('tempC'));
});

Route::get('ex4', function() {
    return view('lista-exercicios.ex4');
});

Route::post('listaex4', function(Request $request) {
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $area = $altura * $largura;

    return view('lista-exercicios.ex4', compact('area'));
});

Route::get('ex5', function() {
    return view(('lista-exercicios.ex5'));
});

Route::post('listaex5', function(Request $request) {
    $raio = floatval($request->input('raio'));
    $area = round((pi() * $raio ** 2), 2); 
    return view('lista-exercicios.ex5', compact('area'));
});

Route::get('ex6', function() {
    return view('lista-exercicios.ex6');
});

Route::post('listaex6', function(Request $request) {
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $perimetro = ($altura * 2) + ($largura * 2);
    return view('lista-exercicios.ex6', compact('perimetro'));
});

Route::get('ex7', function() {
    return view('lista-exercicios.ex7');
});

Route::post('listaex7', function(Request $request) {
    $raio = floatval($request->input('raio'));
    $perimetro = round(2 * pi() * $raio, 2) ;

    return view('lista-exercicios.ex7', compact('perimetro'));
});

