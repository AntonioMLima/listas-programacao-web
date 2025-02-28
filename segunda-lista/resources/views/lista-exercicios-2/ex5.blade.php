<?php
/*
5. Faça um programa que leia o valor associado a um mês. Exemplo: 1 – 
Janeiro, 2 – Fevereiro... Exiba o nome do mês associado = USE SWITCH 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex5">
                        
    @csrf 

    <div class="mb-3">
        <label for="mes" class="form-label">Mês:</label>
        <input type="number" id="mes" name="mes" class="form-control" required="">
    </div>
                    

                    
            
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($nomeDoMes) 
        <p> Mês: {{$nomeDoMes}}</p>
@endisset
@endsection
