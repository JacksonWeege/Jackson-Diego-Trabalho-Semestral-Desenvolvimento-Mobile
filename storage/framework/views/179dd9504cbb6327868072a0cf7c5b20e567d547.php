<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1>Home</h1>
        <div class="row container">
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                        <img src="<?php echo e($produto->imagem); ?>">
                        <span class="card-title"><?php echo e($produto->marca); ?></span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?php echo e(Str::limit($produto->nome, 30)); ?></span>
                            <p><?php echo e($produto->peso); ?><?php echo e($produto->medida); ?></p>
                            <p>R$<?php echo e($produto->preco); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row center">
            <?php echo e($produtos->links('site.paginacao')); ?>

        </div>        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/site/home.blade.php ENDPATH**/ ?>