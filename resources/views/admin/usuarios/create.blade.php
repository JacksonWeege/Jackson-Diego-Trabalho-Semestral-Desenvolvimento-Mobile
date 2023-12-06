<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo usuário</h4>
      <form action="{{route('admin.cadastrar.usuario')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s6">
            <input name="name" id="name" type="text" class="validate">
            <label for="name">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="email" id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s4">
            <input name="password" id="password" type="text" class="validate">
            <label for="password">Senha</label>
          </div>
          {{--<div class="input-field col s4">
            <input name="credencial" id="credencial" type="number" required>
            <label for="credencial">Credencial</label>
          </div>--}}       
        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div>