    

    <?php $__env->startSection('titulo', 'Creacion Posts'); ?>

    <?php $__env->startSection('contenido'); ?>
        <h1>NUEVO POST</h1>

        <form action="<?php echo e(route('posts.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <label for="titulo">Titulo:</label>
            <input id="titulo" name="titulo" type="text" value="<?php echo e(old('titulo')); ?>">
            <?php if($errors->has('titulo')): ?>
                <?php echo e($errors->first('titulo')); ?>

            <?php endif; ?>

            <br><hr>

            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" type="text" minlength="15"><?php echo e(old('contenido')); ?></textarea>
            <?php if($errors->has('contenido')): ?>
                <?php echo e($errors->first('contenido')); ?>

            <?php endif; ?>


            <br><hr>

            <label for="user">Usuario/a:</label>
            <input id="user" name="user" type="text" value="<?php echo e($users->name); ?>" readonly>

            <br><hr>

            <label for="userID">ID:</label>
            <input id="userID" name="userID" type="text" value="<?php echo e($users->id); ?>" readonly>

            <br><hr>

            <input type="submit" value="Enviar">
        </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/blog/resources/views/posts/create.blade.php ENDPATH**/ ?>