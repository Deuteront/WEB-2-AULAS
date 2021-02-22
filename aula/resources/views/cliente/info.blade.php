@extends('principal')
@section('titulo', 'Informações Cliente')
@section('conteudo')
<h3>Informação Cliente</h3>
<p>ID :{{ $cliente['id'] }}</p>
<p>NOME :{{ $cliente['nome'] }}</p>

<a href="{{ route('clientes.index') }}">Voltar</a>
@endsection
