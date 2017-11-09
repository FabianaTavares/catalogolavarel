<?php $__env->startSection('title', 'Alterar o produto: '.$produto->titulo); ?>
<?php $__env->startSection('content'); ?>
    <h1>Alterar o produto: <?php echo e($produto->titulo); ?></h1>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(Session::has('mensagem')): ?>
        <div class="alert alert-success">
           <?php echo e(Session::get('mensagem')); ?>

        </div>
    <?php endif; ?>
    <?php echo e(Form::open(['route' => ['produtos.update', $produto->id], 'enctype'=> 'multipart/form-data', 'method' => 'PUT'])); ?>

    <?php echo e(Form::label('referencia', 'Referência', ['class'=>'prettyLabels'])); ?>

    <?php echo e(Form::text('referencia', $produto->referencia, ['class' => 'form-control', 'required', 'placeholder' => 'Referência'])); ?>

    <?php echo e(Form::label('titulo', 'Titulo')); ?>

    <?php echo e(Form::text('titulo', $produto->titulo, ['class'=>'form-control', 'required', 'placeholder'=>'Título'])); ?>

    <?php echo e(Form::label('descricao', 'Descrição')); ?>

    <?php echo e(Form::textarea('descricao', $produto->descricao, ['rows'=>3, 'class'=>'form-control', 'required', 'placeholder'=>'Descricao'])); ?>

    <?php echo e(Form::label('preco', 'Preço')); ?>

    <?php echo e(Form::text('preco', $produto->preco, ['class'=>'form-control', 'required', 'placeholder'=>'Preço'])); ?>

    <?php echo e(Form::label('fotoproduto', 'Foto')); ?>

    <?php echo e(Form::file('fotoproduto', ['class'=>'form-control', 'id'=>'fotoproduto'])); ?>

    <br/>
    <?php echo e(Form::submit('Alterar', ['class'=>'btn btn-default'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>