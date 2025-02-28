<?php
/*
1. Escreva um programa para calcular a soma dos dois valores de entrada. Se 
os dois valores forem iguais, retorne o triplo da soma. 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex1">
                        
    @csrf 

    <div class="mb-3">
        <label for="valor1" class="form-label">Primeiro valor:</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
                    
    <div class="mb-3">
        <label for="valor2" class="form-label">Segundo valor</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>
                    
            
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
            
    @isset($resultado)
        <p> Resultado: {{ $resultado }} </p>
    @endisset


@endsection
