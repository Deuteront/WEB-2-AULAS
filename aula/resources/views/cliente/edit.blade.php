@extends('principal')
@section('titulo', 'editar')
@section('conteudo')
<h3>ATUALIZAR CLIENTE</h3>
<br>
<h3>Novo Cliente</h3>
<form action="{{ route('clientes.update', $cliente['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $cliente['nome'] }}" placeholder="Informe o Nome">
    <input type="submit" value="Atualizar">
    <a href="{{ route('clientes.index') }}">Voltar</a>
</form>
@endsection
