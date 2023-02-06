<?php $__env->startSection('titulo', 'Ficha post'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Ficha del post <?php echo e($id); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alumno/ProyectosLaravel/blog/resources/views/posts/ficha.blade.php ENDPATH**/ ?>