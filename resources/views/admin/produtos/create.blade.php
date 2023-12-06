<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
      <form action="{{route('admin.cadastrar.produto')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="marca" id="marca" type="text" class="validate">
            <label for="marca">Marca</label>
          </div>
          <div class="input-field col s4">
            <input name="preco" id="preco" type="number" step=0.01 required>
            <label for="preco">Preço R$</label>
          </div>
          <div class="input-field col s4">
            <input name="peso" id="peso" type="number" step=0.01 required>
            <label for="peso">Peso</label>
          </div>
          <div class="input-field col s4">
            <input name="medida" id="medida" type="text" class="validate">
            <label for="medida">Medida</label>
          </div>
          <div class="input-field col s12">
            <input name="imagem" id="imagem" type="text" class="validate">
            <label for="imagem">Imagem</label>
          </div>
          
          <div class="input-field col s12">
            <select name="id_mercados">
              <option value="" disabled selected>Selecione o Mercado</option>
              @foreach($mercados as $mercado)
              <option value="{{$mercado->id}}">{{$mercado->nome}}</option>
              @endforeach
            </select>
            <label>Mercado</label>
          </div>  

          <div class="input-field col s12">
            <select name="id_categorias">
              <option value="" disabled selected>Selecione a categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
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