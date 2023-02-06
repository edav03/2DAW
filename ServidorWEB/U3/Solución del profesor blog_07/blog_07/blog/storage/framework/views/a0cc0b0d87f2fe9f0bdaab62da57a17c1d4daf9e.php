<?php $__env->startSection('titulo', 'Editar post'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Edición de post</h1>

    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo"
                id="titulo" value="<?php echo e($post->titulo); ?>">
        </div>

        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="form-control" name="contenido" id="contenido"><?php echo e($post->contenido); ?></textarea>
        </div>

        <input type="submit" name="enviar" value="Enviar"
            class="btn btn-dark btn-block">

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nacho/Proyectos/blog/resources/views/posts/edit.blade.php ENDPATH**/ ?>