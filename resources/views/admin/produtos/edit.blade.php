<!-- Modal Structure -->
<div id="edit-{{$produto}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Atualizar produto</h4>
      <form action="{{route('admin.atualizar.produto')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        @method('PUT')
        <div class="row">
            <input hidden name="id" id="id" type="text" value="{{$produto->id}}" class="validate">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" value="{{$produto->nome}}" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="marca" id="marca" type="text" value="{{$produto->marca}}" class="validate">
            <label for="marca">Marca</label>
          </div>
          <div class="input-field col s4">
            <input name="preco" id="preco" type="number" value="{{$produto->preco}}" step=0.01 required>
            <label for="preco">Preço R$</label>
          </div>
          <div class="input-field col s4">
            <input name="peso" id="peso" type="number" value="{{$produto->peso}}" step=0.01 required>
            <label for="peso">Peso</label>
          </div>
          <div class="input-field col s4">
            <input name="medida" id="medida" type="text" value="{{$produto->medida}}" class="validate">
            <label for="medida">Medida</label>
          </div>
          <div class="input-field col s12">
            <input name="imagem" id="imagem" type="text" value="{{$produto->imagem}}" class="validate">
            <label for="imagem">Imagem</label>
          </div>
          {{--<div class="input-field col s12">
            <input name="id_mercados" id="id_mercados" type="text" value="{{$produto->id_mercados}}" class="validate">
            <label for="id_mercados">id_mercados</label>
          </div>
          <div class="input-field col s12">
            <input name="id_categorias" id="id_categorias" type="text" value="{{$produto->id_categorias}}" class="validate">
            <label for="id_categorias">id_categorias</label>
          </div>--}}
          
          <div class="input-field col s12">
            <select name="id_mercados" id="id_mercados">
              @foreach($mercados as $mercado)
                @if($mercado->id == $produto->mercado->id)
                  <option value="{{$produto->mercado->id}}" selected>{{$produto->mercado->nome}}</option>
                @else
                  <option value="{{$mercado->id}}">{{$mercado->nome}}</option>
                @endif
              @endforeach
            </select>
            <label>Mercado</label>
          </div>  

          <div class="input-field col s12">
            <select name="id_categorias" id="id_categorias">
              @foreach($categorias as $categoria)
                @if($categoria->id == $produto->categoria->id)
                  <option value="{{$produto->categoria->id}}" selected>{{$produto->categoria->nome}}</option>
                @else
                  <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endif
              @endforeach
            </select>
            <label>Categoria</label>
          </div>       

        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
</div>