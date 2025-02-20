<?php
/*
5. Crie um formulário que permita ao usuário inserir o raio de um círculo. O script PHP deve 
calcular a área do círculo (πr²) e exibir o resultado.
*/
?>


@extends('layout')

@section('conteudo')


<form method="post" action="listaex5">
    @csrf 

    <div class="mb-3">
        <label for="raio" class="form-label">Raio do circulo:</label>
        <input type="text" id="raio" name="raio" class="form-control" required="">
    </div>

    

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)
        <p> A área do circulo é {{$area}}cm²  </p>
@endisset

@endsection