<!DOCTYPE html>
    <html>
        <head>
            <title>Olá Mundo - <?php echo $__env->yieldContent('title'); ?></title>
            <?php echo e(Html::style('css/bootstrap.min.css')); ?>

            <?php echo e(Html::style('css/bootstrap-theme.min.css')); ?>

        </head>
        <body>
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo e(Html::script('js/jquery-3.2.1.min.js')); ?>

            <?php echo e(Html::script('js/bootstrap.min.js')); ?>

        </body>
    </html>