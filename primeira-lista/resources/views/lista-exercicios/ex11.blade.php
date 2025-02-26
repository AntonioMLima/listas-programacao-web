<?php
/*
Crie um formulário que permita ao usuário inserir seu peso (em kg) e altura (em metros). O 
script PHP deve calcular o IMC (peso / altura²) e exibir o resultado.
*/
?>

@extends('layout')

@section('conteudo')


<form method="post" action="listaex11">
    @csrf
    <div class="mb-3">
        <label for="peso" class="form-label">Peso:</label>
        <input type="text" id="peso" name="peso" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Altura:</label>
        <input type="text" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($imc)
<p> IMC: {{$imc}}</p>
@endisset

@endsection