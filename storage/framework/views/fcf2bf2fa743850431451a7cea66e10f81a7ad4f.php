<!-- Modal Structure -->
<div id="delete-<?php echo e($produto->id); ?>" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">delete</i> Confirmar exclusão</h4>
        <div class="row">       
            <p>Confirmar exclusão do produto <?php echo e($produto->nome); ?>?</p>
        </div> 
        <form action="<?php echo e(route('admin.deletar.produto', $produto->id)); ?>" method="POST">
            <?php echo method_field('delete'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        </form>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
</div><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/produtos/delete.blade.php ENDPATH**/ ?>