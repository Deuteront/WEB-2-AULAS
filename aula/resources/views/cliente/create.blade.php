@extends('principal')
@section('titulo', 'criar Cliente')
@section('conteudo')
<h3>Novo Cliente</h3>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Informe o Nome">
    <input type="submit" value="salvar">
</form>

@component('components.alert', ['titulo'=> 'Erro Fatal','tipo'=>'info'])
<h3>mensagem de erro com componentes</h3>
<p><strong>Erro Inesperado</strong></p>
<p>Verifique o componentes...</p>
@endcomponent

@component('components.alert', ['titulo'=> 'Erro Fatal','tipo'=>'error'])
<h3>mensagem de erro com componentes</h3>
<p><strong>Erro Inesperado</strong></p>
<p>Verifique o componentes...</p>
@endcomponent

@component('components.alert', ['titulo'=> 'Erro Fatal','tipo'=>'sucess'])
<h3>mensagem de erro com componentes</h3>
<p><strong>Erro Inesperado</strong></p>
<p>Verifique o componentes...</p>
@endcomponent

@component('components.alert', ['titulo'=> 'Erro Fatal','tipo'=>'warning'])
<h3>mensagem de erro com componentes</h3>
<p><strong>Erro Inesperado</strong></p>
<p>Verifique o componentes...</p>
@endcomponent
@endsection
