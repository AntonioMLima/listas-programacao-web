<?php
/*
9. Crie um formulário para que o usuário informe um número. Use um loop 
for para calcular o fatorial desse número e exibir o resultado. 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex9">
                        
    @csrf 

    <div class="mb-3">
        <label for="num" class="form-label">Numero:</label>
        <input type="text" id="num" name="num" class="form-control" required="">
    </div>

                    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($resultado) 
    <p> Resultado: {{$resultado}} </p> 
@endisset
@endsection
