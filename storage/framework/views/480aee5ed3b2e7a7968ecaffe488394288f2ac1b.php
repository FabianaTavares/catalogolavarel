<?php $__env->startSection('title', 'Listagem dos Produtos'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Produtos</h1>
    <?php echo e(Form::open(['url'=>['produtos/buscar']])); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="input-group">
                    <?php echo e(Form::text('busca', $busca, ['class'=>'form-control', 'required', 'placeholder'=>'Buscar'])); ?>

                    <span class="input-group-btn">
                        <?php echo e(Form::submit('Buscar', ['class'=>'btn btn-default'])); ?>

                    </span>
                </div>
            </div>
        </div>
    <?php echo e(Form::close()); ?>

    <?php if(Session::has('mensagem')): ?>
        <div class="alert alert-success">
           <?php echo e(Session::get('mensagem')); ?>

        </div>
    <?php endif; ?>
    <div class="row">
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <h4><?php echo e($produto->titulo); ?></h4>
                <?php if(file_exists("./img/produtos/".md5($produto->id).".jpg")): ?>
                    <a href="<?php echo e(asset("img/produtos/".md5($produto->id).".jpg")); ?>" class="thumbnail">
                        <?php echo e(Html::image(asset("img/produtos/".md5($produto->id). ".jpg"))); ?>

                    </a>
                <?php else: ?>
                    <a href="<?php echo e(url('produtos/'.$produto->id)); ?>" class="thumbnail">
                        <?php echo e($produto->titulo); ?>

                    </a>
                <?php endif; ?>
                <?php if(Auth::check()): ?>
                    <?php echo e(Form::open(['route'=>['produtos.destroy', $produto->id], 'method'=>'DELETE'])); ?>

                    <a class='btn btn-default' href=" <?php echo e(url('produtos/'.$produto->id.'/edit')); ?>">Editar</a>
                    <?php echo e(Form::submit('Excluir', ['class'=>'btn btn-default'])); ?>

                    <?php echo e(Form::close()); ?>

                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($produtos->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>