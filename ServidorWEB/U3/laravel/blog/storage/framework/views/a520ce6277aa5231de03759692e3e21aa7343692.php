<?php $__env->startSection('titulo', 'Listado de posts'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1 id="list">Listado de post</h1>

    
    <?php if(auth()->check()): ?>
        <button class="btn btn-primary"><a href="<?php echo e(route('NuevoPost')); ?>">Nuevo Post</a></button><br><br>
    <?php endif; ?>

            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            

                        <h3 class="d-inline p-2"> <?php echo e($row->titulo); ?> ( <?php echo e($row->usuarios->name  ?? 'None'); ?> )
                        
                            
                        
                        <button class="d-inline p-2 btn btn-secondary "><a href="<?php echo e(route('posts.show', $row->id)); ?>">VER</a></button>
                    
                        
                        <?php if(auth()->check()): ?>
                            <?php if(auth()->user()->login == $row->usuarios->login): ?>
                                
                                
                                <form class="d-inline p-2 " action="<?php echo e(route('posts.destroy', $row->id)); ?>" method="POST">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger">Borrar</button>
                                </form>

                                
                            
                                <button class="d-inline p-2 btn btn-success"><a href="<?php echo e(route('EditarLibro', $row->id)); ?>">EDITAR</a></button>
                            <?php endif; ?>
                        <?php endif; ?>
                    </h3>
                <br><br><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>La Query esta vacia</p>
            <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/blog/resources/views/posts/listado.blade.php ENDPATH**/ ?>