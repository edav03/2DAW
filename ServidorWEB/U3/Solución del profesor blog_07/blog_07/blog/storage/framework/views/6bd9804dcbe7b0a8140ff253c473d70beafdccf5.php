<?php $__env->startSection('titulo', 'Ficha post'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1><?php echo e($post->titulo); ?></h1>
    <p><em>Escrito por <?php echo e($post->usuario->login); ?>

        el <?php echo e(Carbon\Carbon::parse($post->created_at)->format("d/m/Y")); ?></em></p>
    <div>
        <?php echo e($post->contenido); ?>

    </div>

    <?php if(auth()->check() && (auth()->user()->id == $post->usuario->id || auth()->user()->rol == 'admin')): ?>
        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="submit" class="btn btn-danger" value="Eliminar post" />
        </form>

        <div>
            <a class="btn btn-primary" href="<?php echo e(route('posts.edit', $post->id)); ?>">Editar post</a>
        </div>
    <?php endif; ?>

    <h3>Comentarios</h3>
    <?php $__empty_1 = true; $__currentLoopData = $post->comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card">
            <div class="card-body">
                <?php echo e($comentario->contenido); ?>

            </div>
            <div class="card-footer">
                <em><?php echo e($comentario->usuario->login); ?></em>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No hay comentarios en este post.</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nacho/Proyectos/blog/resources/views/posts/show.blade.php ENDPATH**/ ?>