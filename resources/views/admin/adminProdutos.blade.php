<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('menu')
    @include('admin.layout')

    <div class="fixed-action-btn">
        <a href="#create" class="btn-floating btn-large bg-gradient-green modal-trigger">
          <i class="large material-icons">add</i>
        </a>   
      </div>
    
      @include('admin.produtos.create')
      
        
        <div class="row container crud">
          @include('admin.include.mensagens')  
                <div class="row titulo ">              
                  <h1 class="left">Produtos</h1>
                  <span class="right chip">{{$numeroProdutos}} produtos cadastrados</span>  
                </div>
    
               <nav class="bg-gradient-blue">
                <div class="nav-wrapper">
                  <form>
                    <div class="input-field">
                      <input placeholder="Pesquisar..." id="search" type="search" required>
                      <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                  </form>
                </div>
              </nav>     
    
                <div class="card z-depth-4 registros" >
                <table class="striped ">
                    <thead>
                      <tr>
                        <th></th>
                        <th>ID</th>  
                        <th>Produto</th>
                          
                          <th>Preço</th>
                          <th>Categoria</th>
                          <th></th>
                      </tr>
                    </thead>
            
                    <tbody>
                      @foreach($produtos as $produto)  
                        <tr>
                            <td><img src="{{$produto->imagem}}" class="circle "></td>
                            <td>#{{$produto->id}}</td>
                            <td>{{$produto->nome}}</td>                    
                            <td>R$ {{number_format($produto->preco, 2, ',', '.')}}</td>
                            <td>{{$produto->categoria->nome}}</td>
                            <td>
                              <a href="#edit-{{$produto}}" class="btn-floating modal-trigger waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                              <a href="#delete-{{$produto->id}}" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a>
                            </td>
                            @include('admin.produtos.edit')
                            @include('admin.produtos.delete')
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div> 

                {{--paginação--}} 
                <div class="row center">
                    {{$produtos->links('paginacao')}}
                </div>               
        </div>
           


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('js/chart.js')}}" ></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>