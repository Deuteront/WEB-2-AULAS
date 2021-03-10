@extends('layout.app', ["current" => "categorias"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('categorias.update', $cat['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria"
                       id="nomeCategoria" placeholder="Informe o nome da Categoria...">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/categorias" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection
