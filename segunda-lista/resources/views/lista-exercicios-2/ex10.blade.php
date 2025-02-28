<?php
/*
10. Crie um formulário para que o usuário informe um número. Use um loop 
for para imprimir a tabuada desse número de 1 a 10. 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex10">
                        
    @csrf 

    <div class="mb-3">
        <label for="num" class="form-label">Numero:</label>
        <input type="text" id="num" name="num" class="form-control" required="">
    </div>

                    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($num) 
    @for($i = 1; $i <= 10; $i++) 
        <p class="border-bottom p-2 w-50">{{$num}} * {{$i}}    = {{$num * $i}}</p>
    @endfor
@endisset
@endsection
