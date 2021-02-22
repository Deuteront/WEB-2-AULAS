@extends('principal')
@section('titulo', 'Informações departamento')
@section('conteudo')
<h3>departamentos</h3>
<a href="{{ route ('departamentos.create') }}">NOVO departamento</a>
@if (isset($departamentos)>0)
<ul>
    @foreach ($departamentos as $c)
    <li>
        {{ $c['id'] }} | {{ $c['nome'] }} |
        <a href="{{ route ('departamentos.edit', $c['id']) }}">Editar</a>
        <a href="{{ route ('departamentos.show', $c['id']) }}">Info</a>
        <form action="{{ route('departamentos.destroy', $c['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar"/>
        </form>
    </li>
    @endforeach
</ul>
@else
<h3>Não há departamentos cadastrados!!!</h3>
@endif
@endsection
