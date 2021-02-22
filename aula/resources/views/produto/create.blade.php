@extends('principal')
@section('titulo', 'criar produto')
@section('conteudo')
<h3>Novo produto</h3>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Informe o Nome">
    <input type="submit" value="salvar">
</form>
@endsection
