<?php
/*
6. Crie um formulário para que o usuário informe um número. Use um loop 
for para imprimir todos os números de 1 até o número informado. 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex6">
                        
    @csrf 

    <div class="mb-3">
        <label for="num" class="form-label">Numero:</label>
        <input type="text" id="num" name="num" class="form-control" required="">
    </div>

                    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($num) 
    @for ($i = 1; $i <= $num; $i++)
        <p> {{$i}}</p>
    @endfor
@endisset
@endsection
