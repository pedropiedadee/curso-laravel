<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSS DA APLICAÇÃO --> 

        <!-- Fonte DO Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@100;300&family=Roboto" rel="stylesheet">

        <!-- CSS BOOTSRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <link rel="stylesheet " href="/css/style.css">
       <script src="/js/scripts.js"></script>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/logo.svg" alt="HDC EVENTS">
            </a>
            <ul class="navbar-nav">
              <li class="nav-link"></li>
                <a class="nav-item">Eventos</a>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-link"></li>
                <a href="./events/create" class="nav-item">Criar Eventos</a>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-link"></li>
                <a class="nav-item">Entrar</a>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-link"></li>
                <a class="nav-item">Cadastrar</a>
            </ul>
          </div>
        </nav>
      </header>
      @yield('content')
      <footer>
        <p>HDC EVENTS &copy; 2022</p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
