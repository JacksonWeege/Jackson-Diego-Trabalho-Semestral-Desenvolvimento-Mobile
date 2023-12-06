<!-- Modal Structure -->
<div id="edit-{{$mercado}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Atualizar mercado</h4>
      <form action="{{route('admin.atualizar.mercado')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
            <input hidden name="id" id="id" type="text" value="{{$mercado->id}}" class="validate">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" value="{{$mercado->nome}}" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="cidade" id="cidade" type="text" value="{{$mercado->cidade}}" class="validate">
            <label for="cidade">Cidade</label>
          </div>
          <div class="input-field col s4">
            <input name="bairro" id="bairro" type="text" value="{{$mercado->bairro}}" class="validate">
            <label for="bairro">Bairro</label>
          </div>       

        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div>