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

        <div class="row contaner">
            <div class="col s12 m6">
                <img src="{{$produto->imagem}}" class="responsive-img">
            </div>
            <div class="col s12 m6">
                <h4>{{$produto->nome}}</h4>
                <p>{{$produto->marca}}</p><br>
                {{$produto->peso}}{{$produto->medida}}<br>
                R$ {{number_format($produto->preco, 2, ',', '.')}}<br>
                Mercado: {{$produto->mercado->nome}}<br>
                Categoria: {{$produto->categoria->descricao}}<br>

                <form action="{{route('site.addCarrinho')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$produto->id}}">
                    <input type="hidden" name="name" value="{{$produto->nome}}">
                    <input type="hidden" name="price" value="{{$produto->preco}}">
                    <input type="number" name="qnt" value="1" min="1">
                    <input type="hidden" name="img" value="{{$produto->imagem}}">
                    <button class="btn orange btn-large"> Comprar </button>
                </form> 
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
