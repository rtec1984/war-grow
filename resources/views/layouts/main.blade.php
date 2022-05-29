<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
  <!-- DataTables -->
  <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- CSS da aplicação -->
  <link rel="stylesheet" href="/css/styles.css">
  <!-- Icone da aplicação -->
  <link rel="shortcut icon" href="https://rtec84.s3.amazonaws.com/wg/WG.png" />
  <link rel="icon" href="https://rtec84.s3.amazonaws.com/wg/WG.png" sizes="192x192">

  <title>@yield('title')</title>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="/" class="navbar-brand">
        <img src="https://rtec84.s3.amazonaws.com/wg/war.png" alt="WAR">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="flex-direction: row-reverse!important;">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/rules"><i class="fas fa-exclamation-circle"></i> REGRAS <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item">
            <a href="/ranking" class="nav-link"><i class="fas fa-trophy"></i> RANKING</a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link"><i
              class="fas fa-dice"></i> CADASTRAR RESULTADO</a>
          </li>
          @auth
          <li class="nav-item">
            <a href="/results" class="nav-link"><i class="fas fa-chart-line"></i> MEUS RESULTADOS</a>
          </li>
          <li class="nav-item">
            <a href="/user/profile" class="nav-link"><i class="fas fa-address-card"></i> MEU PERFIL</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <a href="/logout" class="nav-link" onclick="event.preventDefault();
                    this.closest('form').submit();">
                <i class="fas fa-sign-out-alt"></i> SAIR
              </a>
            </form>
          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="fas fa-sign-in-alt"></i> ENTRAR</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link"><i class="fas fa-user-plus"></i> REGISTRAR</a>
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
  <footer class="bg-dark bg-gradient text-center text-white">
    <!-- Grid container -->
    <div class="rtec">
      <!-- Section: Social media -->
      <section class="mb-4">
        
        <!-- Instagram -->
        <a href="https://www.instagram.com/war_grow/" target="_blank" class="nav-link"><i class="fab fa-instagram"></i></a>
        
        <!-- Discord -->
        <a href="https://discord.com/invite/7cNqtMQpnt" target="_blank" class="nav-link"><i class="fab fa-discord"></i></a>


        <h6 style="margin-bottom: 0px;margin-top: 10px;">WAR-GROW 2019-<?php echo date('Y'); ?></h6>

        <!-- Whatsapp -->
        <a href="https://chat.whatsapp.com/CurZlhqH5wJKEvcQs0zWGw" target="_blank" class="nav-link"><i class="fab fa-whatsapp"></i></a>

        <!-- RTEC -->
        <a href="https://rochatec.lojaintegrada.com.br/" target="_blank" class="nav-link"><i class="fa fa-fw fa-laptop"></i></a>

      </section>
      <!-- Section: Social media -->
    </div>
  </footer>
  <!-- JavaScript (Opcional) -->
  <script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
  <!-- DataTables -->
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#ranking').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          }
      });
  });
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>