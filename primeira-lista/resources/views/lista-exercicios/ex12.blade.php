<?php
/*
12.Crie um formulário que permita ao usuário inserir um preço e um percentual de desconto. O 
script PHP deve calcular o preço com desconto e exibir o resultado.
*/
?>

@extends('layout')

@section('conteudo')


<form method="post" action="listaex12">
    @csrf
    <div class="mb-3">
        <label for="preco" class="form-label">Preço:</label>
        <input type="text" id="preco" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="percentual" class="form-label">% de Desconto:</label>
        <input type="text" id="percentual" name="percentual" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($preco_final)
<p> Preço Final: R${{$preco_final}}</p>
@endisset

@endsection