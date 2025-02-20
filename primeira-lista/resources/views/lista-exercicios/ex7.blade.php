<?php 
/*
7. Crie um formulário que permita ao usuário inserir o raio de um círculo. O script PHP deve 
calcular o perímetro do círculo (2πr) e exibir o resultado.
*/
?> 

@extends('layout')

@section('conteudo')


<form method="post" action="listaex7">
    @csrf 

    <div class="mb-3">
        <label for="raio" class="form-label">Raio do circulo:</label>
        <input type="text" id="raio" name="raio" class="form-control" required="">
    </div>

    

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($perimetro)
        <p> A área do circulo é {{$perimetro}}cm  </p>
@endisset

@endsection