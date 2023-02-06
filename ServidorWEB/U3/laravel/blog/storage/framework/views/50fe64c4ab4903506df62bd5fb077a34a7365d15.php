<?php $__env->startSection('titulo', 'Ficha post'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1 class="modal-title">Ficha posts <?php echo e($post->titulo); ?></h1>

    <p> Autor: <?php echo e($post->usuarios->name); ?></p>
    <p> <?php echo e($post->contenido_post); ?> </p>
    <p> <em>Fecha de creacion: </em><?php echo e($post->created_at); ?></p>

    <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <button>Borrar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/blog/resources/views/posts/ficha.blade.php ENDPATH**/ ?>