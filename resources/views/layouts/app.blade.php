<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>@yield('title') - Teste Matheus Henrique</title>
</head>
<body>
    
    <nav class="black">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo">Teste Matheus Henrique</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('users.index') }}">Clientes</a></li>
            <li><a href="{{ route('products.index') }}">Produtos</a></li>
            <li><a href=""{{ route('pedidos.index', $user->id) }}"">Pedidos</a></li>
          </ul>
        </div>
      </nav>

    <div class="app">
        @yield('content')
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>