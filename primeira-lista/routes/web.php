<?php

use Dotenv\Util\Regex;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ListaUmController;
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

Route::get('ex1', [ListaUmController::class, 'abrirFormExer1' ]);


Route::post('listaex1', [ListaUmController::class, 'respostaExer1' ] );


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

Route::get("ex8", function() {
    return view('lista-exercicios.ex8');
});

Route::post('listaex8', function(Request $request) {
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));

    $resultado = $base ** $expoente;
    return view('lista-exercicios.ex8', compact('resultado'));
});


Route::get("ex9", function() {
    return view('lista-exercicios.ex9');
});

Route::post("listaex9", function(Request $request) {
    $metros = floatval($request->input('metros'));
    $centimetros = $metros * 100;

    return view('lista-exercicios.ex9', compact('centimetros'));
});


Route::get("ex10", function() {
    return view('lista-exercicios.ex10');
});

Route::post("listaex10", function(Request $request) {
    $km = floatval($request->input('km'));

    $milhas = round($km * 0.621371, 2);

    return view("lista-exercicios.ex10", compact("milhas"));
});


Route::get("ex11", function() {
    return view("lista-exercicios.ex11");
});

Route::post("listaex11", function(Request $request) {
    $peso = floatval($request->input("peso"));
    $altura = floatval($request->input("altura"));

    

    $imc = number_format($peso / ($altura ** 2), 2);
    return view("lista-exercicios.ex11", compact("imc"));
});

Route::get("ex12", function() {
    return view("lista-exercicios.ex12");
});

Route::post("listaex12", function(Request $request) {
    $preco = floatval($request->input('preco'));
    $desconto = floatval($request->input('percentual'));

    $preco_final = number_format($preco * ($desconto /100), 2, ',', '');
    return view("lista-exercicios.ex12", compact("preco_final"));
});

Route::get("ex13", function() {
    return view("lista-exercicios.ex13");
});

Route::post("listaex13", function(Request $request) {
    $capital = floatval($request->input("capital"));
    $taxa = floatval($request->input("taxa"));
    $periodo = intval($request->input("periodo"));

    $resultado = $capital * ($taxa)  * $periodo;
    $resultado = number_format($resultado, 2, ',', '');
    return view("lista-exercicios.ex13", compact("resultado"));
});

Route::get("ex14", function() {
    return view("lista-exercicios.ex14");
});

Route::post('listaex14', function(Request $request) {
    $capital = floatval($request->input("capital"));
    $taxa = floatval($request->input("taxa"));
    $periodo = intval($request->input("periodo"));

    $resultado =  ($capital * (1 + $taxa) ^ $periodo);
    $resultado = number_format($resultado, 2, ',', '');
    return view("lista-exercicios.ex14", compact("resultado"));
});


Route::get('ex15', function() {
    return view("lista-exercicios.ex15");
});

Route::get("ex15", function() {
    return view("lista-exercicios.ex15");
});

Route::post("listaex15", function(Request $request) {
    $dias = intval($request->input("dias"));

    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    return view("lista-exercicios.ex15", compact("horas", "minutos", "segundos"));
});