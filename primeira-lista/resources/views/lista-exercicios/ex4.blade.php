<?php
/*
4. Crie um formulário que permita ao usuário inserir a largura e a altura de um retângulo. O script 
PHP deve calcular a área do retângulo e exibir o resultado.
*/
?>


@extends('layout')

@section('conteudo')


<form method="post" action="listaex4">
    @csrf 

    <div class="mb-3">
        <label for="largura" class="form-label">Largura:</label>
        <input type="text" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Altura</label>
        <input type="text" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)
        <p> A área do retangulo é {{$area}}cm²  </p>
@endisset

@endsection