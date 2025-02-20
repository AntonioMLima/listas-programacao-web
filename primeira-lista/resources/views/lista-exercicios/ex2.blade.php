<?php
/*
2. Crie um formulário que permita ao usuário inserir uma temperatura em Celsius. O script PHP 
deve converter essa temperatura para Fahrenheit e exibir o resultado
*/
 
?>
@extends('layout')

@section('conteudo')


    
<form method="post" action="listaex2">
                        
    @csrf 

    <div class="mb-3">     
        <label for="tempC" class="form-label">Temperatura em ° Celcius:</label>                            
        <input type="text" id="tempC" name="tempC" class="form-control" required="">       
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
            
    @isset($tempF)
        <p> A temperatura em Fahrenheit é {{$tempF}}°  </p>
    @endisset


@endsection
