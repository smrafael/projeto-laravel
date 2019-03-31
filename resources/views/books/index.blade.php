@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Ano</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    <a href="/books/{{ $book->id }}/edit" 
                        style="color: inherit; margin-right: 10px;" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Editar" ><i class="fas fa-edit"></i></a>
                    <form method="post" action="/books/{{ $book->id }}" style="display: inline;">
                    @method('DELETE')
                    {{ csrf_field() }}
                        <button type="submit" class="btn btn-link" 
                        onclick="return confirm('Tem certeza que deseja excluir: {{ $book->name }}?');"
                        style="color: inherit; padding: 1px 7px 2px;"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/books/create" class="btn btn-primary btn-lg" role="button" aria-pressed="true">+ Novo</a>
</div>
@endsection