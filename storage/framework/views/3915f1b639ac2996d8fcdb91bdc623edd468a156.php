<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

      <ul id='dropdownCategoria' class='dropdown-content'>
        <?php $__currentLoopData = $categoriasMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoriaM): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(route('site.categoria', $categoriaM->id)); ?>"><?php echo e($categoriaM->nome); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>

      <ul id='dropdownLogado' class='dropdown-content'>
        <li><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(route('login.logout')); ?>">Logout</a></li>
      </ul>

      <ul id='dropdownDeslogado' class='dropdown-content'>
        <li><a href="<?php echo e(route('login.form')); ?>">Login</a></li>
        <li><a href="<?php echo e(route('cadastro.form')); ?>">Novo Usuário</a></li>
      </ul>

      <ul id='dropdownAdmin' class='dropdown-content'>
        <li><a href="<?php echo e(route('admin.usuarios')); ?>">Usuários</a></li>
        <li><a href="<?php echo e(route('admin.produtos')); ?>">Produtos</a></li>
        <li><a href="<?php echo e(route('admin.mercados')); ?>">Mercados</a></li>
        <li><a href="<?php echo e(route('admin.categorias')); ?>">Categorias</a></li>
      </ul>

        <nav class="black">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo center">Projeto Mercado<span class="material-icons">shopping_cart</span></a>
              
              <ul id="nav-mobile" class="left">
                <li><a href="<?php echo e(route('site.index')); ?>">Home</a></li>
                <li><a href="" class="dropdown-trigger" data-target="dropdownCategoria">Categorias<i class="material-icons right">expand_more</i></a></li>
                <?php if(\Cart::getContent()->count() > 0): ?>
                <li><a href="<?php echo e(route('site.carrinho')); ?>">Carrinho  <span><?php echo e(\Cart::getContent()->count()); ?></span></a></li>
                <?php else: ?>
                <li><a href="<?php echo e(route('site.carrinho')); ?>">Carrinho</a></li>
                <?php endif; ?>
              </ul>

              <ul id="nav-mobile" class="right">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('acessoAdmin', App\Models\User::class)): ?>
                  <li><a href="" class="dropdown-trigger" data-target="dropdownAdmin">Admin<i class="material-icons right">expand_more</i></a></li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                  <li><a href="" class="dropdown-trigger" data-target="dropdownLogado"><?php echo e(auth()->user()->name); ?><i class="material-icons right">expand_more</i></a></li>
                <?php else: ?>
                  <li><a href="" class="dropdown-trigger" data-target="dropdownDeslogado">Bem Vindo<i class="material-icons right">expand_more</i></a></li>
                <?php endif; ?>
              </ul>

            </div>
          </nav>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
          var elemDrop = document.querySelectorAll('.dropdown-trigger');
          var instanceDrop = M.Dropdown.init(elemDrop, {
              coverTrigger: false,
              constrainWidth: false
          });
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/menu.blade.php ENDPATH**/ ?>