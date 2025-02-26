<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaUmController extends Controller
{
    public function abrirFormExer1() {
        return view('lista-exercicios.ex1');
    }

    public function respostaExer1(Request $request) {
        $nota1 = floatval($request->input('nota1'));
        $nota2 = floatval($request->input('nota2'));
        $nota3 = floatval($request->input('nota3'));

        $media = round(($nota1 + $nota2 + $nota3) / 3, 2);
        return view('lista-exercicios.ex1', compact('media'));
    }
}
