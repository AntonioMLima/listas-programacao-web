<?php
/*
4. Faça um programa para ler um valor e calcular os números primos de 1 até 
o valor informado. 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex4">
                        
    @csrf 

    <div class="mb-3">
        <label for="valor" class="form-label">Valor:</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>
                    

                    
            
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($primos) 

    @foreach ($primos as $primo)
        <p> {{$primo}}</p>
    @endforeach



@endisset
@endsection
