<?php
/*
2. Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem 
crescente em relação aos seus valores. Caso os valores sejam iguais, 
informar o usuário e imprimir o valor em tela apenas uma vez.
Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5".
para A=5, B=5 você deve imprimir na tela: “Números iguais: 5”
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex2">
                        
    @csrf 

    <div class="mb-3">
        <label for="a" class="form-label">A:</label>
        <input type="number" id="a" name="a" class="form-control" required="">
    </div>
                    
    <div class="mb-3">
        <label for="b" class="form-label">B:</label>
        <input type="number" id="b" name="b" class="form-control" required="">
    </div>
                    
            
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
            
@isset($c) 
    <p>Números iguais: {{$c}}</p> 
@endisset

@isset($maior, $menor)
    <p>{{$menor}} {{$maior}}</p>
@endisset

@endsection



