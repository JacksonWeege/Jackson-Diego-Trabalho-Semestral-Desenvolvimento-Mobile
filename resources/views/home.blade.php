<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        @include('menu')
        <h1>Home</h1>
        <div class="row container">
            @foreach ($produtos as $produto)
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                        <img src="{{$produto->imagem}}">
                        <span class="card-title">{{$produto->marca}}</span>
                        <a href="{{route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">search</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">{{Str::limit($produto->nome, 30)}}</span>
                            <p>{{$produto->peso}}{{$produto->medida}}</p>
                            <p>R$ {{number_format($produto->preco, 2, ',', '.')}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row center">
            {{$produtos->links('paginacao')}}
        </div>        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
