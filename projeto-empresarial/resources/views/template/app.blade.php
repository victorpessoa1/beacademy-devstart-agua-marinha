<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro de Produtos</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-sm navbar-dark shadow-sm" style="background-color:#00CED1">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('products.index')}}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('products.add')}}">Novo produto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')

    </div>
</body>

</html>