<!-- Modal Structure -->
<div id="delete-{{$usuario->id}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">delete</i> Confirmar exclusão</h4>
        <div class="row">       
            <p>Confirmar exclusão do usuário {{$usuario->name}}?</p>
        </div> 
        <form action="{{route('admin.deletar.usuario', $usuario->id)}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        </form>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
</div>