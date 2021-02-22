@extends('principal')
@section('titulo', 'editar')
@section('conteudo')
<h3>ATUALIZAR departamento</h3>
<br>
<h3>Novo departamento</h3>
<form action="{{ route('departamentos.update', $departamento['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $departamento['nome'] }}" placeholder="Informe o Nome">
    <input type="submit" value="Atualizar">
    <a href="{{ route('departamentos.index') }}">Voltar</a>
</form>
@endsection
