@extends('layout.app', ["current" => "categorias"])
@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>

        @if(count($cats) > 0)
        <table class="table table-ordered table-hover table-striped">
            <thead class="thead-light">
            <tr>
                <th class="text-center">Código</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
            <tr>
                <td class="text-center">{{$cat->id}}</td>
                <td>{{$cat->nome}}</td>
                <td class="d-flex">
                    <a href="{{ route('categorias.edit', $cat['id']) }}" style="margin-right: 5px" class="btn btn-primary">Editar</a>
                    <form style="margin: 0; align-self: center;" action="{{ route('categorias.destroy', $cat['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Apagar">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="card-footer">
        <a href="/categorias/create" class="btn btn-primary" role="button">Nova Categoria</a>
    </div>
</div>
@endsection
