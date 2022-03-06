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
  <title>@yield('title')</title>

<body>
  <header>
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <x-jet-application-mark class="block h-9 w-auto" />
  <x-jet-nav-link href="/ranking"><i class="fa fa-fw fa-trophy"></i>
    {{ __('Ranking') }}
  </x-jet-nav-link>
  <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"><i class="fa fa-fw fa-plus"></i>
    {{ __('Cadastrar Resultado') }}
  </x-jet-nav-link>
  @guest
  <x-jet-nav-link href="/login"><i class="fa fa-fw fa-user"></i>
    {{ __('Entrar') }}
  </x-jet-nav-link>
  <x-jet-nav-link href="/register"><i class="fa fa-fw fa-user-plus"></i>
    {{ __('Cadastrar Jogador') }}
  </x-jet-nav-link>
  @endguest
  @auth
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-jet-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">
      {{ __('Sair') }}
    </x-jet-nav-link>
  </form>
  @endauth
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
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
      <ul class="container-fluid">
        <li class="nav-item">
          <a href="https://rochatec.lojaintegrada.com.br/" target="_blank" class="nav-link"><i class="fa fa-fw fa-laptop"></i> ROCHA TECNOLOGIA &copy;
            2017-
            <?php echo date('Y'); ?>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.instagram.com/war_grow/" target="_blank" class="nav-link"><i class="fa fa-fw fa-instagram"></i> PERFIL NO INSTAGRAM</a>
        </li>
        <li class="nav-item">
          <a href="https://discord.com/invite/7cNqtMQpnt" target="_blank" class="nav-link"><i class="fa fa-fw fa-discord"></i> COMUNIDADE NO DISCORD</a>
        </li>
        <li class="nav-item">
          <a href="https://chat.whatsapp.com/Kw5aROV8UboCTtGVPnkhbC" target="_blank" class="nav-link"><i class="fa fa-fw fa-whatsapp"></i> GRUPO NO WHATSAPP
            &copy; 2019-
            <?php echo date('Y'); ?>
          </a>
        </li>
      </ul>
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
</body>

</html>