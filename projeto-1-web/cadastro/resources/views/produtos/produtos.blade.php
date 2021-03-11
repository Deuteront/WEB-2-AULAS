@extends('layout.app', ["current" => "produtos"])
@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        @if(count($prds) > 0)
        <table class="table table-ordered table-hover table-striped">
            <thead class="thead-light">
            <tr>
                <th class="text-center">Código</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th>Categoria_id</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prds as $prd)
            <tr>
                <td class="text-center">{{$prd->id}}</td>
                <td>{{$prd->nome}}</td>
                <td>{{$prd->estoque}}</td>
                <td>{{$prd->preco}}</td>
                <td >{{$prd->categoria_id}}</td>
                <td class="d-flex">
                    <a href="{{ route('produtos.edit', $prd['id']) }}" style="margin-right: 5px"
                       class="btn btn-primary">Editar</a>
                    <form style="margin: 0; align-self: center;" action="{{ route('produtos.destroy', $prd['id']) }}"
                          method="POST">
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
        <a href="/produtos/create" class="btn btn-primary" role="button">Novo Produto</a>
    </div>
</div>
@endsection
