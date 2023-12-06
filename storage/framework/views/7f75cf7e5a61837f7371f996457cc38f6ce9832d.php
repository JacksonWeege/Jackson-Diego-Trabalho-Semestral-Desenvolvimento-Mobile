<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="fixed-action-btn">
        <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
          <i class="large material-icons">add</i>
        </a>   
      </div>
    
      <?php echo $__env->make('admin.categorias.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
        
        <div class="row container crud">
          <?php echo $__env->make('admin.include.mensagens', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
                <div class="row titulo ">              
                  <h1 class="left">Categorias</h1>
                  <span class="right chip"><?php echo e($numeroCategorias); ?> categorias cadastradas</span>  
                </div>
    
               <nav class="bg-gradient-blue">
                <div class="nav-wrapper">
                  <form>
                    <div class="input-field">
                      <input placeholder="Pesquisar..." id="search" type="search" required>
                      <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                  </form>
                </div>
              </nav>     
    
                <div class="card z-depth-4 registros" >
                <table class="striped ">
                    <thead>
                      <tr>
                        <th>ID</th>  
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th></th>
                      </tr>
                    </thead>
            
                    <tbody>
                      <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <tr>
                          <td>#<?php echo e($categoria->id); ?></td>
                          <td><?php echo e($categoria->nome); ?></td>                    
                          <td><?php echo e($categoria->descricao); ?></td>                    
                          <td><a href="#edit-<?php echo e($categoria); ?>" class="btn-floating modal-trigger waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                          <a href="#delete-<?php echo e($categoria->id); ?>" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                          <?php echo $__env->make('admin.categorias.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          <?php echo $__env->make('admin.categorias.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div> 

                 
                <div class="row center">
                    <?php echo e($categorias->links('paginacao')); ?>

                </div>               
        </div>
           


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php echo e(asset('js/chart.js')); ?>" ></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/adminCategorias.blade.php ENDPATH**/ ?>