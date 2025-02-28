<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Break_;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\Console\Input\Input;

class Lista2Controller extends Controller
{
    /*
    exemplo:
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
    */

    //ex1 
    public function abrirFormEx1() {
        return view("lista-exercicios-2.ex1");
    }
    
    public function resolverEx1(Request $request) {
        $valor1 = intval($request->input("valor1"));
        $valor2 = intval($request->input("valor2"));

        $resultado = $valor1 != $valor2 ?
        $valor1 + $valor2 :
        ($valor1 + $valor2) * 3;

        return view("lista-exercicios-2.ex1", compact('resultado'));
    }



    public function abrirFormEx2() {
        return view("lista-exercicios-2.ex2");
    }
    
    public function resolverEx2(Request $request) {
        $a = intval($request->input("a"));
        $b = intval($request->input("b"));

        if ($a == $b) {
            $c = $a;
            return view("lista-exercicios-2.ex2", compact('c'));

        } else if ($a > $b) {
            $maior = $a;
            $menor = $b;
            
        } else {
            $maior = $b;
            $menor = $a;
        }
        return view("lista-exercicios-2.ex2", compact('maior', 'menor'));
    }
    
    
    public function abrirFormEx3() {
        return view("lista-exercicios-2.ex3");
    }
    
    public function resolverEx3(Request $request) {
        $preco = floatval($request->Input('preco'));
        
        if ($preco > 100) {
            $novoPreco = $preco * 0.85;
            $novoPreco = number_format($novoPreco, 2, ',', '');
            return view("lista-exercicios-2.ex3", compact("novoPreco"));
        } 
        $preco = number_format($preco, 2, ',', '');
        return view("lista-exercicios-2.ex3", compact("preco"));
    }


    public function abrirFormEx4() {
        return view("lista-exercicios-2.ex4");
    }

    public function resolverEx4(Request $request) {
        $valor = intval($request->input("valor"));
        $primos = [];

        for ($i = 2; $i <= $valor; $i++) {
            $isPrimo = true;
            for ($d = 2; $d <= $i/2 ; $d++) {
                if ($i % $d == 0) {
                    $isPrimo = false;
                }
            }
            if ($isPrimo) {
                array_push($primos, $i);
            }
        }

        return view("lista-exercicios-2.ex4", compact("primos", "valor"));

    }

    public function abrirFormEx5() {
        return view("lista-exercicios-2.ex5");
    }

    public function resolverEx5(Request $request) {
        $mes = intval($request->input("mes"));
        $nomeDoMes = '';
        
        switch ($mes) {
            case 1:
                $nomeDoMes = "Janeiro";
                break;
            case 2:
                $nomeDoMes = "Fevereiro";
                break;
            case 3:
                $nomeDoMes = "Março";
                break;
            case 4:
                $nomeDoMes = "Abril";
                break;
            case 5:
                $nomeDoMes = "Maio";
                break;
            case 6:
                $nomeDoMes = "Junho";
                break;
            case 7:
                $nomeDoMes = "Julho";
                break;
            case 8:
                $nomeDoMes = "Agosto";
            case 9:
                $nomeDoMes = "Setembro";
                break;
            case 10;
                $nomeDoMes = "Outubro";
                break;
            case 11:
                $nomeDoMes = "Novembro";
                break;
            case 12:
                $nomeDoMes = "Dezembro";
                break;
            default:
                $nomeDoMes = "Mês inexistente";
                break;
        }

        return view("lista-exercicios-2.ex5", compact('nomeDoMes'));
    }


    public function abrirFormEx6() {
        return view("lista-exercicios-2.ex6");
    }

    public function resolverEx6(Request $request) {
        $num = intval($request->input("num")); 
        return view("lista-exercicios-2.ex6", compact("num"));
    }

    public function abrirFormEx7() {
        return view("lista-exercicios-2.ex7");
    }

    public function resolverEx7(Request $request) {
        $num = intval($request->input("num")); 
        $i = 0;
        $resultado = 0;
        while ($i <= $num) {
            $resultado += $i++;
        }
        return view("lista-exercicios-2.ex7", compact("resultado"));
    }
    

    public function abrirFormEx8() {
        return view("lista-exercicios-2.ex8");
    }
    
    public function resolverEx8(Request $request) {
        $num = intval($request->input("num")); 
        return view("lista-exercicios-2.ex8", compact("num"));
    }

    public function abrirFormEx9() {
        return view("lista-exercicios-2.ex9");
    }

    public function resolverEx9(Request $request) {
        $num = intval($request->input("num"));

        $resultado = 1;

        for ($i = 2; $i <= $num && $num > 1; $i++) {
            $resultado *= $i;
        }

        return view("lista-exercicios-2.ex9", compact("resultado"));
    }

    public function abrirFormEx10() {
        return view("lista-exercicios-2.ex10");
    }

    public function resolverEx10(Request $request) {
        $num = intval($request->input("num")); 
        return view("lista-exercicios-2.ex10", compact("num"));
    }
}
