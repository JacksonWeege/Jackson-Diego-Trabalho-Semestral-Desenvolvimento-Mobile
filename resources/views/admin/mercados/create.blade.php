<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo mercado</h4>
      <form action="{{route('admin.cadastrar.mercado')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="cidade" id="cidade" type="text" class="validate">
            <label for="cidade">Cidade</label>
          </div>
          <div class="input-field col s4">
            <input name="bairro" id="bairro" type="text" class="validate">
            <label for="bairro">Bairro</label>
          </div>       

        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div>