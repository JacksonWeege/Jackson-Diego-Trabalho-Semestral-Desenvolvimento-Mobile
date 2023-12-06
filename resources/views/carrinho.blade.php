<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Carrinho</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        @include('menu')
        <div class="row container">

          @if($mensagem = Session::get('sucesso'))
            <div class="card blue">
              <div class="card-content white-text">
                <span class="card-title">Sucesso!</span>
                <p>{{$mensagem}}</p>
              </div>
            </div>
          @endif
          @if($mensagem = Session::get('aviso'))
            <div class="card blue">
              <div class="card-content white-text">
                <span class="card-title">Tudo bem!</span>
                <p>{{$mensagem}}</p>
              </div>
            </div>
          @endif
          @if($itens->count() == 0)
            <div class="card green">
              <div class="card-content white-text">
                <span class="card-title">Seu carrinho está vazio!</span>
                <p>Aproveite nossas promoções!</p>
              </div>
            </div>
          @endif

            <h5>Seu Carrinho possui {{$itens->count()}} Produtos</h5>

            <table class="striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach ($itens as $item)
                  <tr>
                    <td><img src="{{$item->attributes->image}}" alt="" width="70" class="responsive-img circle"></td>
                    <td>{{$item->name}}</td>
                    <td>R${{number_format($item->price, 2, ',', '.')}}</td>

                    {{--botao atualizar--}}
                    <form action="{{route('site.atualizaCarrinho')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{$item->id}}">
                      <td><input style="width: 40px; font-weight:900" class="white center" type="number" min="1" name="quantity" value="{{$item->quantity}}"></td>
                      <td>
                        <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                    </form>

                    {{--botao remover--}}
                    <form action="{{route('site.removeCarrinho')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{$item->id}}">
                      <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                    </form>

                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>

              <div class="card blue">
                <div class="card-content white-text">
                  <span class="card-title">Valor Total: R${{number_format(\Cart::getTotal(), 2, ',', '.')}}</span>
                  <p>em até 12x sem juros!</p>
                </div>
              </div>

              <div class="row container center">
                <a href="{{route('site.index')}}" class="btn waves-effect waves-light blue"> Continuar Comprando <i class="material-icons right">arrow_back</i></a>
                @if($itens->count() > 0)
                <a href="{{route('site.limparCarrinho')}}" class="btn waves-effect waves-light blue"> Lmpar Carrinho <i class="material-icons right">clear</i></a>
                <a href="" class="btn waves-effect waves-light green"> Finalizar Pedido <i class="material-icons right">check</i></a>
                @endif
              </div>

        </div>     

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
