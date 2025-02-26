<?php
/*
13.Crie um formulário que permita ao usuário inserir um capital, uma taxa de juros e um período. 
O script PHP deve calcular os juros simples (capital * taxa * período) e exibir o resultado.
*/
?>

@extends('layout')

@section('conteudo')


<form method="post" action="listaex13">
    @csrf
    <div class="mb-3">
        <label for="capital" class="form-label">Capital R$:</label>
        <input type="text" id="capital" name="capital" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Taxa de Juros:</label>
        <input type="text" id="taxa" name="taxa" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Período:</label>
        <input type="text" id="periodo" name="periodo" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($resultado)
<p> Resultado: R${{$resultado}}</p>
@endisset

@endsection