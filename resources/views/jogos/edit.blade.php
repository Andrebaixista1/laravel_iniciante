@extends('layouts.app') 

@section('title','Edição') 
<!-- Tudo aqui é renderizado no template -->
@section('content')
<div class="container mt-5">
    <h1>Editar jogo</h1>
    <hr>
    <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" placeholder="Digite o nome" class="form-control" value="{{ $jogos->nome }}">
                <br>
                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" placeholder="Digite a categoria" class="form-control" value="{{ $jogos->categoria }}">
                <br>
                <label for="ano_criacao">Ano de Criação: </label>
                <input type="number" name="ano_criacao" placeholder="Digite o ano de criação" class="form-control" value="{{ $jogos->ano_criacao }}">
                <br>
                <label for="valor">Valor: </label>
                <input type="number" name="valor" placeholder="Digite o valor" class="form-control" value="{{ $jogos->valor }}">
                <br>
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
            
        </div>
    </form>
</div>


@endSection