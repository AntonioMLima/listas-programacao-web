<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Lista2Controller;

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


/*
exemplo: 
Route::get('ex1', [ListaUmController::class, 'abrirFormExer1' ]);


Route::post('listaex1', [ListaUmController::class, 'respostaExer1' ] );
*/

//ex1
Route::get("ex1", [Lista2Controller::class, 'abrirFormEx1']);
Route::post("lista2ex1", [Lista2Controller::class, 'resolverEx1']);



//ex2
Route::get("ex2", [Lista2Controller::class, 'abrirFormEx2']);
Route::post("lista2ex2", [Lista2Controller::class, 'resolverEx2']);



//ex3
Route::get("ex3", [Lista2Controller::class, 'abrirFormEx3']);
Route::post("lista2ex3", [Lista2Controller::class, 'resolverEx3']);



//ex4
Route::get("ex4", [Lista2Controller::class, 'AbrirFormEx4']);
Route::post("lista2ex4", [Lista2Controller::class, 'ResolverEx4']);



//ex5
Route::get("ex5", [Lista2Controller::class, 'AbrirFormEx5']);
Route::post("lista2ex5", [Lista2Controller::class, 'ResolverEx5']);



//ex5
Route::get("ex6", [Lista2Controller::class, 'AbrirFormEx6']);
Route::post("lista2ex6", [Lista2Controller::class, 'ResolverEx6']);



//ex7
Route::get("ex7", [Lista2Controller::class, 'AbrirFormEx7']);
Route::post("lista2ex7", [Lista2Controller::class, 'ResolverEx7']);



//ex8
Route::get("ex8", [Lista2Controller::class, 'AbrirFormEx8']);
Route::post("lista2ex8", [Lista2Controller::class, 'ResolverEx8']);



//ex9
Route::get("ex9", [Lista2Controller::class, 'AbrirFormEx9']);
Route::post("lista2ex9", [Lista2Controller::class, 'ResolverEx9']);



//ex10
Route::get("ex10", [Lista2Controller::class, 'abrirFormEx10']);
Route::post("lista2ex10", [Lista2Controller::class, 'ResolverEx10']);



