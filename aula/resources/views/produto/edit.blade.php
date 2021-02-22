@extends('principal')
@section('titulo', 'editar')
@section('conteudo')
<h3>ATUALIZAR produto</h3>
<br>
<h3>Novo produto</h3>
<form action="{{ route('produtos.update', $produto['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $produto['nome'] }}" placeholder="Informe o Nome">
    <input type="submit" value="Atualizar">
    <a href="{{ route('produtos.index') }}">Voltar</a>
</form>
@endsection
