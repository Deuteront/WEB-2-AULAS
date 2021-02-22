@extends('principal')
@section('titulo', 'criar departamento')
@section('conteudo')
<h3>Novo departamento</h3>
<form action="{{ route('departamentos.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Informe o Nome">
    <input type="submit" value="salvar">
</form>
@endsection
