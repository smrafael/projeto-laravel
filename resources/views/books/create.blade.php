@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action="/books">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" class="form-control" name="author" placeholder="Autor">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="year">Ano</label>
                        <input type="text" class="form-control" name="year" placeholder="Ano">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">Preço</label>
                        <input type="text" class="form-control" name="price" placeholder="Preço">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div>
</div>
@endsection