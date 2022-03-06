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
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
      <!-- Primary Navigation Menu -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
              <x-jet-application-mark class="block h-9 w-auto" />
            </div>
          </div>
          <!-- Navigation Links -->
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-jet-nav-link href="/ranking">
              {{ __('Ranking') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
              {{ __('Cadastrar Resultado') }}
            </x-jet-nav-link>
            @guest
            <x-jet-nav-link href="/login">
              {{ __('Entrar') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="/register">
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
          </div>
        </div>
      </div>
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
      <ul class="container-fluid">
        <li class="nav-item">
          <a href="https://rochatec.lojaintegrada.com.br/" target="_blank" class="nav-link">ROCHA TECNOLOGIA &copy;
            2017-
            <?php echo date('Y'); ?>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.instagram.com/war_grow/" target="_blank" class="nav-link">PERFIL NO INSTAGRAM</a>
        </li>
        <li class="nav-item">
          <a href="https://discord.com/invite/7cNqtMQpnt" target="_blank" class="nav-link">COMUNIDADE NO DISCORD</a>
        </li>
        <li class="nav-item">
          <a href="https://chat.whatsapp.com/Kw5aROV8UboCTtGVPnkhbC" target="_blank" class="nav-link">GRUPO NO WHATSAPP
            &copy; 2019-
            <?php echo date('Y'); ?>
          </a>
        </li>
      </ul>
  </footer>
  <!-- JavaScript (Opcional) -->
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