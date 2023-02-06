<?php $__env->startSection('titulo', 'Listado posts'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Listado de posts</h1>

    <table>
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($post->titulo); ?> (<?php echo e($post->usuario->login); ?>)</td>
            <td><a class="btn btn-warning" href="<?php echo e(route('posts.show', $post)); ?>">Ver</a></td>
            <?php if(auth()->check() && (auth()->user()->id == $post->usuario->id || auth()->user()->rol == 'admin')): ?>
                <td>
                    <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                </td>
                <td><a class="btn btn-success" href="<?php echo e(route('posts.edit', $post)); ?>">Editar</a></td>
            <?php endif; ?>
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr><td>No se encontraron posts</td></tr>
    <?php endif; ?>
    </table>

    <?php echo e($posts->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nacho/Proyectos/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>