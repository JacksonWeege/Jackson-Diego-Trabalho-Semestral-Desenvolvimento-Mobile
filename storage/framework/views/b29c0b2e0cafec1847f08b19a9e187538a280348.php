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
        
        <div class="row container">
            <?php if($mensagem = Session::get('erro')): ?>
            <div class="card blue">
                <div class="card-content white-text">
                    <span class="card-title">Erro!</span>
                    <p><?php echo e($mensagem); ?></p>
                </div>
            </div>
            <?php endif; ?>   
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card blue">
                    <div class="card-content white-text">
                        <span class="card-title">Erro!</span>
                        <p><?php echo e($error); ?></p>
                    </div>
                </div>
                <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?> 
            
            <form action="<?php echo e(route('login.auth')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                Email:<input type="email" name="email"><br>
                Senha:<input type="password" name="password"><br>
                <button type="submit">Login</button>
            </form>
        </div>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/login/form.blade.php ENDPATH**/ ?>