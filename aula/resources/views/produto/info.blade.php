@extends('principal')
@section('titulo', 'Informações produto')
@section('conteudo')
<h3>Informação produto</h3>
<p>ID :{{ $produto['id'] }}</p>
<p>NOME :{{ $produto['nome'] }}</p>

<a href="{{ route('produtos.index') }}">Voltar</a>
@endsection
