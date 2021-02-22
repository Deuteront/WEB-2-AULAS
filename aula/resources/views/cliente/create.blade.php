@extends('cliente.principal')
@section('titulo', 'criar Cliente')
@section('conteudo')
<h3>Novo Cliente</h3>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Informe o Nome">
    <input type="submit" value="salvar">
</form>
@endsection
