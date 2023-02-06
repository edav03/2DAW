<?php $__env->startSection('titulo', 'Nuevo post'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Nuevo post</h1>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo"
                id="titulo" value="<?php echo e(old('titulo')); ?>" />
            <?php if($errors->has('titulo')): ?>
                <div class="text-danger">
                    <?php echo e($errors->first('titulo')); ?>

                </div>
            <?php endif; ?>
            </div>

        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="form-control" name="contenido" id="contenido"><?php echo e(old('contenido')); ?></textarea>
            <?php if($errors->has('contenido')): ?>
                <div class="text-danger">
                    <?php echo e($errors->first('contenido')); ?>

                </div>
            <?php endif; ?>
        </div>

        <input type="submit" name="enviar" value="Enviar"
            class="btn btn-dark btn-block">

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nacho/Proyectos/blog/resources/views/posts/create.blade.php ENDPATH**/ ?>