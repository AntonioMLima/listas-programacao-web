<?php 
/*
3. Crie um formulário que permita ao usuário inserir uma temperatura em Fahrenheit. O script 
PHP deve converter essa temperatura para Celsius e exibir o resultado.
*/
?>


@extends('layout')

@section('conteudo')


    
<form method="post" action="listaex3">
                        
    @csrf 

    <div class="mb-3">     
        <label for="tempF" class="form-label">Temperatura em ° Fahrenheit:</label>                            
        <input type="text" id="tempF" name="tempF" class="form-control" required="">       
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
            
    @isset($tempC)
        <p> A temperatura em Celcius é {{$tempC}}°  </p>
    @endisset


@endsection