<!-- Modal Structure -->
<div id="edit-<?php echo e($produto); ?>" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Atualizar produto</h4>
      <form action="<?php echo e(route('admin.atualizar.produto')); ?>" method="POST" enctype="multipart/form-data" class="col s12">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <input hidden name="id" id="id" type="text" value="<?php echo e($produto->id); ?>" class="validate">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" value="<?php echo e($produto->nome); ?>" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="marca" id="marca" type="text" value="<?php echo e($produto->marca); ?>" class="validate">
            <label for="marca">Marca</label>
          </div>
          <div class="input-field col s4">
            <input name="preco" id="preco" type="number" value="<?php echo e($produto->preco); ?>" step=0.01 required>
            <label for="preco">Preço R$</label>
          </div>
          <div class="input-field col s4">
            <input name="peso" id="peso" type="number" value="<?php echo e($produto->peso); ?>" step=0.01 required>
            <label for="peso">Peso</label>
          </div>
          <div class="input-field col s4">
            <input name="medida" id="medida" type="text" value="<?php echo e($produto->medida); ?>" class="validate">
            <label for="medida">Medida</label>
          </div>
          <div class="input-field col s12">
            <input name="imagem" id="imagem" type="text" value="<?php echo e($produto->imagem); ?>" class="validate">
            <label for="imagem">Imagem</label>
          </div>
          
          
          <div class="input-field col s12">
            <select name="id_mercados" id="id_mercados">
              <?php $__currentLoopData = $mercados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mercado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($mercado->id == $produto->mercado->id): ?>
                  <option value="<?php echo e($produto->mercado->id); ?>" selected><?php echo e($produto->mercado->nome); ?></option>
                <?php else: ?>
                  <option value="<?php echo e($mercado->id); ?>"><?php echo e($mercado->nome); ?></option>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label>Mercado</label>
          </div>  

          <div class="input-field col s12">
            <select name="id_categorias" id="id_categorias">
              <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($categoria->id == $produto->categoria->id): ?>
                  <option value="<?php echo e($produto->categoria->id); ?>" selected><?php echo e($produto->categoria->nome); ?></option>
                <?php else: ?>
                  <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label>Categoria</label>
          </div>       

        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
</div><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/produtos/edit.blade.php ENDPATH**/ ?>