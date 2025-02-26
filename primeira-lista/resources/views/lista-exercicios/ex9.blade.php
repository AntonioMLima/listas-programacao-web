<?php
/*
9. Crie um formulário que permita ao usuário inserir um valor em metros. O script PHP deve 
converter esse valor para centímetros e exibir o resultado.
*/
?>


@extends('layout')

@section('conteudo')


<form method="post" action="listaex9">
    @csrf

    <div class="mb-3">
        <label for="metros" class="form-label">Metros:</label>
        <input type="text" id="metros" name="metros" class="form-control" required="">
    </div>

    

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($centimetros)
<p> Em centímetros: {{$centimetros}}</p>
@endisset

@endsection