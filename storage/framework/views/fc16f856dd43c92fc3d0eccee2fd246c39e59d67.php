<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Nova categoria</h4>
      <form action="<?php echo e(route('admin.cadastrar.categoria')); ?>" method="POST" enctype="multipart/form-data" class="col s12">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="descricao" id="descricao" type="text" class="validate">
            <label for="descricao">Descrição</label>
          </div>
        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/categorias/create.blade.php ENDPATH**/ ?>