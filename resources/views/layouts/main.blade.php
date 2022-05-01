<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
  <!-- DataTables -->
  <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">


  <title>@yield('title')</title>

</head>

<body>
  <header>
    <nav class="rtec">
      <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <div class="topnav" id="myTopnav">
        <x-jet-application-mark class="block h-9 w-auto" />
        <x-jet-nav-link href="/regras"><i class="fas fa-exclamation-circle"></i>
          {{ __('Regras') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="/ranking"><i class="fas fa-trophy"></i>
          {{ __('Ranking') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"><i
            class="fas fa-dice"></i>
          {{ __('Cadastrar Resultado') }}
        </x-jet-nav-link>
        @guest
        <x-jet-nav-link href="/login"><i class="fas fa-sign-in-alt"></i>
          {{ __('Entrar') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="/register"><i class="fas fa-user-plus"></i>
          {{ __('Cadastrar Jogador') }}
        </x-jet-nav-link>
        @endguest
        @auth
        <form class="sair" method="POST" action="{{ route('logout') }}">
          @csrf
          <x-jet-nav-link style="width: 100%;" href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i>
            {{ __('Sair') }}
          </x-jet-nav-link>
        </form>
        @endauth
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
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
        <!-- Discord -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://discord.com/invite/7cNqtMQpnt" target="_blank">
          <i class="fab fa-discord"></i>
          <p class="web">Comunidade no Discord</p>
        </a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/war_grow/" target="_blank">
          <i class="fab fa-instagram"></i>
          <p class="web">Perfil no Instagram</p>
        </a>

        <!-- Whatsapp -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://chat.whatsapp.com/CurZlhqH5wJKEvcQs0zWGw"
          target="_blank">
          <i class="fab fa-whatsapp	"></i>
          <p class="web">Grupo no WhatsApp</p>
        </a>

      </section>
      <!-- Section: Social media -->

      <!-- Copyright -->

      <a href="https://rochatec.lojaintegrada.com.br/" target="_blank" class="nav-link"><i
          class="fa fa-fw fa-laptop"></i> ROCHA TECNOLOGIA &copy;
        2017-
        <?php echo date('Y'); ?>
      </a>
      <!-- Copyright -->
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
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
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

</body>

</html>