<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
      <form action="<?php echo e(route('admin.cadastrar.produto')); ?>" method="POST" enctype="multipart/form-data" class="col s12">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="marca" id="marca" type="text" class="validate">
            <label for="marca">Marca</label>
          </div>
          <div class="input-field col s4">
            <input name="preco" id="preco" type="number" step=0.01 required>
            <label for="preco">Preço R$</label>
          </div>
          <div class="input-field col s4">
            <input name="peso" id="peso" type="number" step=0.01 required>
            <label for="peso">Peso</label>
          </div>
          <div class="input-field col s4">
            <input name="medida" id="medida" type="text" class="validate">
            <label for="medida">Medida</label>
          </div>
          <div class="input-field col s12">
            <input name="imagem" id="imagem" type="text" class="validate">
            <label for="imagem">Imagem</label>
          </div>
          
          <div class="input-field col s12">
            <select name="id_mercados">
              <option value="" disabled selected>Selecione o Mercado</option>
              <?php $__currentLoopData = $mercados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mercado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($mercado->id); ?>"><?php echo e($mercado->nome); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label>Mercado</label>
          </div>  

          <div class="input-field col s12">
            <select name="id_categorias">
              <option value="" disabled selected>Selecione a categoria</option>
              <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label>Categoria</label>
          </div>          

        </div> 
       
        <button type="submit" class="waves-effect waves-green btn blue left">Confirmar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn red left">Cancelar</a><br>
    </div>
    
  </form>
  </div><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/produtos/create.blade.php ENDPATH**/ ?>