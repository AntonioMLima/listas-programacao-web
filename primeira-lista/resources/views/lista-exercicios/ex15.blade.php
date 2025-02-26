<?php
/*
15.Crie um formulário que permita ao usuário inserir um valor em dias. O script PHP deve 
converter esse valor para horas, minutos e segundos e exibir o resultado
*/
?>

@extends('layout')

@section('conteudo')


<form method="post" action="listaex15">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label">Dias:</label>
        <input type="text" id="dias" name="dias" class="form-control" required="">
    </div>

    
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($horas)
<p> Horas: {{$horas}}</p>
@endisset

@isset($minutos)
<p> Minutos: {{$minutos}}</p>
@endisset

@isset($segundos)
<p> Segundos: {{$segundos}}</p>
@endisset

@endsection