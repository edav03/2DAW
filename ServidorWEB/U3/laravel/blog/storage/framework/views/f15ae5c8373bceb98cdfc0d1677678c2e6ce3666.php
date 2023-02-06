<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo e(route('inicio')); ?>">Pagina de inicio</a>
            <a class="nav-item nav-link active" href="<?php echo e(route('posts.index')); ?>">Listado de posts</a>
            <?php if(auth()->guest()): ?>
                <a class="nav-item nav-link active" href="<?php echo e(route('login')); ?>">Login</a>
            <?php endif; ?>
            <?php if(auth()->check()): ?>
            <p class="nav-item nav-link active">Bienvenido/a <strong><?php echo e(auth()->user()->login); ?></strong></p>
            <a class="nav-item nav-link active" href="<?php echo e(route('logout')); ?>">Logout</a>
            <?php endif; ?>
            <p class="nav-item nav-link active" href="#" id="route"><?php echo e(setActivo(Route::currentRouteName())); ?></p>
        </div>
    </div>
</nav><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/blog/resources/views/partials/nav.blade.php ENDPATH**/ ?>