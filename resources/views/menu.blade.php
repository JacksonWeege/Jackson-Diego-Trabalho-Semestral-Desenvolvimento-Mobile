<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

      <ul id='dropdownCategoria' class='dropdown-content'>
        @foreach($categoriasMenu as $categoriaM)
        <li><a href="{{route('site.categoria', $categoriaM->id)}}">{{$categoriaM->nome}}</a></li>
        @endforeach
      </ul>

      <ul id='dropdownLogado' class='dropdown-content'>
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('login.logout')}}">Logout</a></li>
      </ul>

      <ul id='dropdownDeslogado' class='dropdown-content'>
        <li><a href="{{route('login.form')}}">Login</a></li>
        <li><a href="{{route('cadastro.form')}}">Novo Usuário</a></li>
      </ul>

      <ul id='dropdownAdmin' class='dropdown-content'>
        <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
        <li><a href="{{route('admin.produtos')}}">Produtos</a></li>
        <li><a href="{{route('admin.mercados')}}">Mercados</a></li>
        <li><a href="{{route('admin.categorias')}}">Categorias</a></li>
      </ul>

        <nav class="black">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo center">Projeto Mercado<span class="material-icons">shopping_cart</span></a>
              
              <ul id="nav-mobile" class="left">
                <li><a href="{{route('site.index')}}">Home</a></li>
                <li><a href="" class="dropdown-trigger" data-target="dropdownCategoria">Categorias<i class="material-icons right">expand_more</i></a></li>
                @if(\Cart::getContent()->count() > 0)
                <li><a href="{{route('site.carrinho')}}">Carrinho  <span>{{\Cart::getContent()->count()}}</span></a></li>
                @else
                <li><a href="{{route('site.carrinho')}}">Carrinho</a></li>
                @endif
              </ul>

              <ul id="nav-mobile" class="right">
                @can('acessoAdmin', App\Models\User::class)
                  <li><a href="" class="dropdown-trigger" data-target="dropdownAdmin">Admin<i class="material-icons right">expand_more</i></a></li>
                @endcan
                @auth
                  <li><a href="" class="dropdown-trigger" data-target="dropdownLogado">{{auth()->user()->name}}<i class="material-icons right">expand_more</i></a></li>
                @else
                  <li><a href="" class="dropdown-trigger" data-target="dropdownDeslogado">Bem Vindo<i class="material-icons right">expand_more</i></a></li>
                @endauth
              </ul>

            </div>
          </nav>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
          var elemDrop = document.querySelectorAll('.dropdown-trigger');
          var instanceDrop = M.Dropdown.init(elemDrop, {
              coverTrigger: false,
              constrainWidth: false
          });
        </script>
    </body>
</html>
