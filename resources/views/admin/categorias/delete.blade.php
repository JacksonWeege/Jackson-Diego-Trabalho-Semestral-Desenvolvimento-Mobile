<!-- Modal Structure -->
<div id="delete-{{$categoria->id}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">delete</i> Confirmar exclusão</h4>
        <div class="row">       
            <p>Confirmar exclusão da categoria {{$categoria->nome}}?</p>
        </div> 
        <form action="{{route('admin.deletar.categoria', $categoria->id)}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        </form>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
</div>