@extends('layout.app', ["current" => "produtos"])
@section('body')
<div class="card border">
    <h4 style="border-bottom: 1px solid #dee2e6;
   padding: 1rem;">Cadastrar Produto</h4>
    <div class="card-body">
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto"
                           id="nomeProduto" placeholder="Informe o Nome do Produto...">
                </div>
                <div class="form-group col-md-6">
                    <label for="estoqueProduto">Estoque</label>
                    <input type="number" class="form-control" name="estoqueProduto"
                           id="estoqueProduto" placeholder="Informe o Estoque do Produto...">
                </div>
                <div class="form-group col-md-6">
                    <label for="precoProduto">Preco</label>
                    <input type="text" class="form-control" name="precoProduto"
                           id="precoProduto" placeholder="Informe o Preco do Produto...">
                </div>
                <div class="form-group col-md-6">
                    <label for="categoriaProduto">Categoria</label>
                    <select name="categoriaProduto" class="form-control">
                        <option value="0">Select categoria:</option>
                        @foreach($cats as $cat)
                        <option value="{{ $cat['id'] }}">{{ $cat['id'] }} - {{$cat['nome'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="/produtos" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection
