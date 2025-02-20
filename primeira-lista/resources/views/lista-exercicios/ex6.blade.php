<?php
/*
6. Crie um formulário que permita ao usuário inserir a largura e a altura de um retângulo. O script 
PHP deve calcular o perímetro do retângulo e exibir o resultado.
*/
?>

@extends('layout')

@section('conteudo')


<form method="post" action="listaex6">
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

@isset($perimetro)
        <p> O perímetro do retangulo é {{$perimetro}}cm  </p>
@endisset

@endsection