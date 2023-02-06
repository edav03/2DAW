<h1>Listado posts</h1>
<button><h5><a href="<?php echo e(route('nuevoPost')); ?>">Crear Post</a></h5></button>

<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <p><?php echo e($post->titulo); ?>

    <button><a href="<?php echo e(route('posts.show', $post->id)); ?>">Ver</a></button>
    <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button>BORRAR</button>
    </form>
    <form action="<?php echo e(route('editarPost', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button>EDITAR</button>
    </form>
    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No hay nada para mostrar</p>
<?php endif; ?>

<?php echo e($posts->links()); ?>

<?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/pruebaBlog/resources/views/posts/index.blade.php ENDPATH**/ ?>