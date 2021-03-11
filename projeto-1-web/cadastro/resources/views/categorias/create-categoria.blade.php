@extends('layout.app', ["current" => "categorias"])
@section('body')
<div class="card border">
    <h4 style="border-bottom: 1px solid #dee2e6;  padding: 1rem;">Cadastrar Categoria</h4>
    <div class="card-body">
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria"
                       id="nomeCategoria" placeholder="Informe o nome da Categoria...">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="/categorias" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection
