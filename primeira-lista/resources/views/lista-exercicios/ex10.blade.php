<?php
/*
10.Crie um formulário que permita ao usuário inserir um valor em quilômetros. O script PHP deve 
converter esse valor para milhas (1 quilômetro = 0.621371 milhas) e exibir o resultado.
*/
?>



@extends('layout')

@section('conteudo')


<form method="post" action="listaex10">
    @csrf

    <div class="mb-3">
        <label for="km" class="form-label">Quilomêtros:</label>
        <input type="text" id="km" name="km" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($milhas)
<p> Em milhas: {{$milhas}}</p>
@endisset

@endsection