@extends('layout.app', ["current" => "produtos"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('produtos.update', $prd['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="{{ $prd['nome'] }}"
                           id="nomeProduto" placeholder="Informe o Nome do Produto...">
                </div>
                <div class="form-group col-md-6">
                    <label for="estoqueProduto">Estoque</label>
                    <input type="number" class="form-control" name="estoqueProduto" value="{{ $prd['estoque'] }}"
                           id="estoqueProduto" placeholder="Informe o Estoque do Produto...">
                </div>
                <div class="form-group col-md-6">
                    <label for="precoProduto">Preco</label>
                    <input type="text" class="form-control" name="precoProduto" value="{{ $prd['preco'] }}"
                           id="precoProduto" placeholder="Informe o Preco do Produto...">
                </div>
                <div class="form-group col-md-6">
                    <label for="categoriaProduto">Categoria</label>
                    <select name="categoriaProduto" class="form-control">
                        <option value="0">Select categoria:</option>
                        @foreach($cats as $cat)
                        <option value="{{ $cat['id'] }}">{{ $cat['nome'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/produtos" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection
