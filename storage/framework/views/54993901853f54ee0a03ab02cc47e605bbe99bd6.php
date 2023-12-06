<!-- Modal Structure -->
<div id="edit-<?php echo e($usuario); ?>" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Atualizar usuário</h4>
      <form action="<?php echo e(route('admin.atualizar.usuario')); ?>" method="POST" enctype="multipart/form-data" class="col s12">
        <?php echo csrf_field(); ?>
        <div class="row">
            <input hidden name="id" id="id" type="text" value="<?php echo e($usuario->id); ?>" class="validate">
            <div class="input-field col s6">
                <input name="name" id="name" type="text" value="<?php echo e($usuario->name); ?>" class="validate">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
                <input name="email" id="email" type="email" value="<?php echo e($usuario->email); ?>" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s4">
                <input name="password" id="password" type="text" value="<?php echo e($usuario->senha); ?>" class="validate">
                <label for="password">Senha</label>
            </div>
                
        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/usuarios/edit.blade.php ENDPATH**/ ?>