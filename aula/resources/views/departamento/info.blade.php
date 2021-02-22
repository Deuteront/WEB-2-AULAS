@extends('principal')
@section('titulo', 'Informações departamento')
@section('conteudo')
<h3>Informação departamento</h3>
<p>ID :{{ $departamento['id'] }}</p>
<p>NOME :{{ $departamento['nome'] }}</p>

<a href="{{ route('departamentos.index') }}">Voltar</a>
@endsection
