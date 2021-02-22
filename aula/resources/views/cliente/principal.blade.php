<!doctype html>
<html lang="pt">
<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
</head>
<body>
<ul>
    <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
    <li><a href="{{ route('clientes.index') }}">Departamentos</a></li>
    <li><a href="{{ route('clientes.index') }}">Produtos</a></li>
</ul>
@yield('conteudo')
</body>
</html>
