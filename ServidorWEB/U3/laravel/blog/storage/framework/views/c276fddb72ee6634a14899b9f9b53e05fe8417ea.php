<?php $__env->startSection('titulo','Login Form'); ?>;

<?php $__env->startSection('contenido'); ?>
    <h1>Login</h1>
    <?php if(!empty($error)): ?>

        <div class="text-danger">
            <?php echo e($error); ?>

        </div>

    <?php endif; ?>

    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login" id="login" />
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" />
        </div>

        <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/blog/resources/views/auth/login.blade.php ENDPATH**/ ?>