<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Detalhes</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        @include('menu')
        
        <div class="row container"> 
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="card blue">
                    <div class="card-content white-text">
                        <span class="card-title">Erro!</span>
                        <p>{{$error}}</p>
                    </div>
                </div>
                <br>
                @endforeach
            @endif 
            
            <form action="{{route('usuario.cadastro')}}" method="POST">
                @csrf
                Nome:<input type="text" name="name"><br>
                Email:<input type="email" name="email"><br>
                Senha:<input type="password" name="password"><br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
