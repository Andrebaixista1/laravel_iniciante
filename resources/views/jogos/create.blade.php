@extends('layouts.app') 

@section('title','Criação') 
<!-- Tudo aqui é renderizado no template -->
@section('content')
<div class="container mt-5">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="{{ route('jogos-store') }}" method=POST>
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" placeholder="Digite o nome" class="form-control">
                <br>
                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" placeholder="Digite a categoria" class="form-control">
                <br>
                <label for="ano_criacao">Ano de Criação: </label>
                <input type="number" name="ano_criacao" placeholder="Digite o ano de criação" class="form-control">
                <br>
                <label for="valor">Valor: </label>
                <input type="number" name="valor" placeholder="Digite o valor" class="form-control">
                <br>
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
            
        </div>
    </form>
</div>


@endSection