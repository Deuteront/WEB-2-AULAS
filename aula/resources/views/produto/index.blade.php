@extends('principal')
@section('titulo', 'Informações produto')
@section('conteudo')
<h3>produtos</h3>
<a href="{{ route ('produtos.create') }}">NOVO produto</a>
@if (isset($produtos)>0)
<ul>
    @foreach ($produtos as $c)
    <li>
        {{ $c['id'] }} | {{ $c['nome'] }} |
        <a href="{{ route ('produtos.edit', $c['id']) }}">Editar</a>
        <a href="{{ route ('produtos.show', $c['id']) }}">Info</a>
        <form action="{{ route('produtos.destroy', $c['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar"/>
        </form>
    </li>
    @endforeach
</ul>
@else
<h3>Não há produtos cadastrados!!!</h3>
@endif
@endsection
