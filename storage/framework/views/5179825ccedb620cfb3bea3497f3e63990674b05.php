<?php $__env->startSection('title', 'Adicionar um produto'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Criar um novo produto</h1>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php echo e(Form::open(['action' => 'ProdutosController@store'])); ?>

    <?php echo e(Form::label('referencia', 'Referência')); ?>

    <?php echo e(Form::text('referencia', '', ['class' => 'form-control', 'required', 'placeholder' => 'Referência'])); ?>

    <?php echo e(Form::label('titulo', 'Titulo')); ?>

    <?php echo e(Form::text('titulo', '', ['class'=>'form-control', 'required', 'placeholder'=>'Título'])); ?>

    <?php echo e(Form::label('descricao', 'Descrição')); ?>

    <?php echo e(Form::textarea('descricao', '', ['rows'=>3, 'class'=>'form-control', 'required', 'placeholder'=>'Descricao'])); ?>

    <?php echo e(Form::label('preco', 'Preço')); ?>

    <?php echo e(Form::text('preco', '', ['class'=>'form-control', 'required', 'placeholder'=>'Preço'])); ?>

    <br/>
    <?php echo e(Form::submit('Cadastrar!', ['class'=>'btn btn-default'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>