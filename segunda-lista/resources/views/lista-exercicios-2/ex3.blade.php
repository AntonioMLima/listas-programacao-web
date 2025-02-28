<?php
/*
3. Faça um programa em PHP onde o valor de um produto é informado. Se 
esse valor for superior a R$100,00 deve ser aplicado um desconto de 15% 
sobre ele e exibido o novo valor do produto. 
*/
?>

@extends('layout')

@section('conteudo')


    
<form method="post" action="lista2ex3">
                        
    @csrf 

    <div class="mb-3">
        <label for="preco" class="form-label">Preço do Produto:</label>
        <input type="number" id="preco" name="preco" class="form-control" required="">
    </div>
                    
            
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
            
@isset($novoPreco) 
    <p>Novo Valor do Produto: R${{$novoPreco}}</p> 
@endisset

@isset($preco)
    <p>Valor do Produto: R${{$preco}}</p>
@endisset

@endsection



