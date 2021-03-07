<!doctype html>
<html lang="pt">
<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"
</head>
<body>
<div class="row">
    <div class="col-1">
        <div class="menu">
            <ul>
                <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                <li><a href="{{ route('departamentos.index') }}">Departamentos</a></li>
                <li><a href="{{ route('produtos.index') }}">Produtos</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-2">
    @yield('conteudo')
</div>
</body>
</html>
