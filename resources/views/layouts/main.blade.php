<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>WAR-GROW</title>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="https://cdn.awsli.com.br/255/255552/logo/7ac966010f.jpg" alt="RTEC">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">EVENTOS</a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link">CRIAR EVENTOS</a>
          </li>
          @auth
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">MEUS EVENTOS</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <a href="/logout" 
                class="nav-link" 
                onclick="event.preventDefault();
                this.closest('form').submit();">
                SAIR
              </a>
            </form>
          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a href="/login" class="nav-link">ENTRAR</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link">CADASTRAR</a>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
          <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>
  <footer>
    <div class="rtec">
    <p>FEITO POR <a href="https://rochatec.lojaintegrada.com.br/" target="_blank" class="rtec">RTEC</a> &copy; 2017-<?php echo date('Y'); ?>                           GRUPO <a href="https://www.google.com/url?q=https%3A%2F%2Fchat.whatsapp.com%2FKw5aROV8UboCTtGVPnkhbC&sa=D&sntz=1&usg=AFQjCNFxDeCh6QxS3wetZeyCBAPQJhYiSQ" target="_blank" class="rtec">WAR-GROW</a> NO WHATSAPP &copy; 2019-<?php echo date('Y'); ?></p>
  </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>