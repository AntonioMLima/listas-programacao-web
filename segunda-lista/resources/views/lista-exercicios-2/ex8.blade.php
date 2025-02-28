<?php
/*
8. Crie um formulário para que o usuário informe um número. Use um loop 
do-while para exibir uma contagem regressiva a partir do número 
informado até 1.
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex8">
                        
    @csrf 

    <div class="mb-3">
        <label for="num" class="form-label">Numero:</label>
        <input type="text" id="num" name="num" class="form-control" required="">
    </div>

                    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($num) 
    @for ($i = $num; $i >= 1; $i--  )
        <p> {{$i}}</p>
    @endfor
@endisset
@endsection
