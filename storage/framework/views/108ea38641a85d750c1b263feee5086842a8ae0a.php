<?php $__env->startSection('title', $produto->titulo); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Produto <?php echo e($produto->titulo); ?></h1>
        <div class="row">
            <div class="col-md-6 col-md-3">
                <ul>
                    <li>Referência: <?php echo e($produto->referencia); ?></li>
                    <li>Preço: R$<?php echo e(number_format($produto->preco, 2, ',', '.')); ?></li>
                    <li>Adicionado em: <?php echo e(date("d/m/Y", strtotime($produto->created_at))); ?></li>
                </ul>
                <p><?php echo e($produto->descricao); ?></p>
            </div>

            <?php if(file_exists("./img/produtos/".md5($produto->id).".jpg")): ?>
                <div class='col-md-6 col-md-3'>
                    <a href="<?php echo e(asset("img/produtos/".md5($produto->id).".jpg")); ?>" class="thumbnail">
                        <?php echo e(Html::image(asset("img/produtos/".md5($produto->id). ".jpg"))); ?>

                    </a>
                </div>
            <?php endif; ?>
        </div>
    <a href="javascript:history.go(-1)">Voltar</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>