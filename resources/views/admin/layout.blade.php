    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>     
      <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
      <li><a href="{{ route('login.logout')}}">Sair</a></li> 
    </ul>


    <nav class="red">
        <div class="nav-wrapper container ">
            <a href="#" class="center brand-logo " href="index.html"><img src="{{asset('img/logo.png')}}"></a>          
          <ul class="right ">                                 
              <li class="hide-on-med-and-down"><a href="#" onclick="fullScreen()"><i class="material-icons">settings_overscan</i> </a> </li>
              <li><a href="#" class="dropdown-trigger" data-target='dropdown2'>Olá {{auth()->user()->name}} <i class="material-icons right">expand_more</i> </a></li>     
          </ul>
          <a href="#" data-target="slide-out" class="sidenav-trigger left  show-on-large"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    

    <ul id="slide-out" class="sidenav " >
      <li><div class="user-view">
        <div class="background red ">
         <img src="{{asset('img/office.jpg')}}" style="opacity: 0.5"> 
        </div>
          <a href="#user"><img class="circle" src="{{asset('img/user.jpg')}}"></a>
          <a href="#name"><span class="white-text name">{{auth()->user()->name}}</span></a>
          <a href="#email"><span class="white-text email">{{auth()->user()->email}}</span></a>
       </div></li> 

       <li><a href="#!"><i class="material-icons">shopping_cart</i>Pedidos</a></li>
        <li><a href="{{route('admin.dashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li><a href="{{route('admin.produtos')}}"><i class="material-icons">playlist_add_circle</i>Produtos</a></li>
        <li><a href="{{route('admin.categorias')}}"><i class="material-icons">bookmarks</i>Categorias</a></li>
        <li><a href="{{route('admin.mercados')}}"><i class="material-icons">shopping_cart</i>Mercados</a></li>
        <li><a href="{{route('admin.usuarios')}}"><i class="material-icons">peoples</i>Usuários</a></li>
    </ul>