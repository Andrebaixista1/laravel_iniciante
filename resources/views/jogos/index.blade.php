@extends('layouts.app')

@section('title','Listagem')

@section('content')
    <!-- Tudo aqui é renderizado no template -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Listagem de jogos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('jogos-create') }}" class="btn btn-success">Adicionar jogo</a>
            </div>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de Criação</th>
                <th scope="col">Valor</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
            @foreach($jogos as $jogo)
                <tr>
                    <th>{{ $jogo->id }}</th>
                    <th>{{ $jogo->nome }}</th>
                    <th>{{ $jogo->categoria }}</th>
                    <th>{{ $jogo->ano_criacao }}</th>
                    <th>{{ $jogo->valor }}</th>
                    <th>
                        <a href="{{route('jogos-edit', ['id'=>$jogo->id])}}" class="btn btn-primary me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                        </a>
                        <form action="{{route('jogos-destroy',['id'=>$jogo->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </button>
                        </form>
                    </th>
                </tr>
                
            @endForeach
            </tbody>
        </table>
</div>
@endSection