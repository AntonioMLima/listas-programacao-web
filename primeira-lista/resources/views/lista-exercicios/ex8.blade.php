<?php
/*
8. Crie um formulário que permita ao usuário inserir uma base e um expoente. O script PHP deve 
calcular a base elevada ao expoente e exibir o resultado.
*/
?>
<?php
/*
7. Crie um formulário que permita ao usuário inserir o raio de um círculo. O script PHP deve 
calcular o perímetro do círculo (2πr) e exibir o resultado.
*/
?>

@extends('layout')

@section('conteudo')


<form method="post" action="listaex8">
    @csrf

    <div class="mb-3">
        <label for="base" class="form-label">Base:</label>
        <input type="text" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Expoente:</label>
        <input type="text" id="expoente" name="expoente" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

@isset($resultado)
<p> Resultado: {{$resultado}}</p>
@endisset

@endsection