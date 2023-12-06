<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Carrinho</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row container">

          <?php if($mensagem = Session::get('sucesso')): ?>
            <div class="card blue">
              <div class="card-content white-text">
                <span class="card-title">Sucesso!</span>
                <p><?php echo e($mensagem); ?></p>
              </div>
            </div>
          <?php endif; ?>
          <?php if($mensagem = Session::get('aviso')): ?>
            <div class="card blue">
              <div class="card-content white-text">
                <span class="card-title">Tudo bem!</span>
                <p><?php echo e($mensagem); ?></p>
              </div>
            </div>
          <?php endif; ?>
          <?php if($itens->count() == 0): ?>
            <div class="card green">
              <div class="card-content white-text">
                <span class="card-title">Seu carrinho está vazio!</span>
                <p>Aproveite nossas promoções!</p>
              </div>
            </div>
          <?php endif; ?>

            <h5>Seu Carrinho possui <?php echo e($itens->count()); ?> Produtos</h5>

            <table class="striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><img src="<?php echo e($item->attributes->image); ?>" alt="" width="70" class="responsive-img circle"></td>
                    <td><?php echo e($item->name); ?></td>
                    <td>R$<?php echo e(number_format($item->price, 2, ',', '.')); ?></td>

                    
                    <form action="<?php echo e(route('site.atualizaCarrinho')); ?>" method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                      <td><input style="width: 40px; font-weight:900" class="white center" type="number" min="1" name="quantity" value="<?php echo e($item->quantity); ?>"></td>
                      <td>
                        <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                    </form>

                    
                    <form action="<?php echo e(route('site.removeCarrinho')); ?>" method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                      <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                    </form>

                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

              <div class="card blue">
                <div class="card-content white-text">
                  <span class="card-title">Valor Total: R$<?php echo e(number_format(\Cart::getTotal(), 2, ',', '.')); ?></span>
                  <p>em até 12x sem juros!</p>
                </div>
              </div>

              <div class="row container center">
                <a href="<?php echo e(route('site.index')); ?>" class="btn waves-effect waves-light blue"> Continuar Comprando <i class="material-icons right">arrow_back</i></a>
                <?php if($itens->count() > 0): ?>
                <a href="<?php echo e(route('site.limparCarrinho')); ?>" class="btn waves-effect waves-light blue"> Lmpar Carrinho <i class="material-icons right">clear</i></a>
                <a href="" class="btn waves-effect waves-light green"> Finalizar Pedido <i class="material-icons right">check</i></a>
                <?php endif; ?>
              </div>

        </div>     

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/carrinho.blade.php ENDPATH**/ ?>