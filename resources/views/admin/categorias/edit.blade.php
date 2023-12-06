<!-- Modal Structure -->
<div id="edit-{{$categoria}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Atualizar categoria</h4>
      <form action="{{route('admin.atualizar.categoria')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
            <input hidden name="id" id="id" type="text" value="{{$categoria->id}}" class="validate">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" value="{{$categoria->nome}}" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="descricao" id="descricao" type="text" value="{{$categoria->descricao}}" class="validate">
            <label for="descricao">Descrição</label>
          </div>    

        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div>