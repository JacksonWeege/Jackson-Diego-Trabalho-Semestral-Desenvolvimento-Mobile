<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Detalhes</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      

        <div class="row contaner">
            <div class="col s12 m6">
                <img src="<?php echo e($produto->imagem); ?>" class="responsive-img">
            </div>
            <div class="col s12 m6">
                <h4><?php echo e($produto->nome); ?></h4>
                <p><?php echo e($produto->marca); ?></p><br>
                <?php echo e($produto->peso); ?><?php echo e($produto->medida); ?><br>
                R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?><br>
                Mercado: <?php echo e($produto->mercado->nome); ?><br>
                Categoria: <?php echo e($produto->categoria->descricao); ?><br>

                <form action="<?php echo e(route('site.addCarrinho')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($produto->id); ?>">
                    <input type="hidden" name="name" value="<?php echo e($produto->nome); ?>">
                    <input type="hidden" name="price" value="<?php echo e($produto->preco); ?>">
                    <input type="number" name="qnt" value="1" min="1">
                    <input type="hidden" name="img" value="<?php echo e($produto->imagem); ?>">
                    <button class="btn orange btn-large"> Comprar </button>
                </form> 
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/details.blade.php ENDPATH**/ ?>