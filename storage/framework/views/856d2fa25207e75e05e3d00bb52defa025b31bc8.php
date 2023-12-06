<?php if($mensagem = Session::get('sucesso')): ?>
    <div class="card blue">
        <div class="card-content white-text">
            <span class="card-title">Sucesso!</span>
            <p><?php echo e($mensagem); ?></p>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\projetos\projetoMercado\resources\views/admin/include/mensagens.blade.php ENDPATH**/ ?>