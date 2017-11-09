<!DOCTYPE html>
    <html>
        <head>
            <title>Produtos</title>
        </head>
        <body>
            <h1>Produtos</h1>
            <ul>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="http://localhost:8000/produtos/<?php echo e($produto->id); ?>"><?php echo e($produto->titulo); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </body>
    </html>