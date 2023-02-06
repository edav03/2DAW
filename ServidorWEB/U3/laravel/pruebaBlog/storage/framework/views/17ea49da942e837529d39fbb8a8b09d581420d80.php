<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(route('inicio')); ?>">Pagina de inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('posts.index')); ?>">Listado Posts</a>
        </li>
        <li class="nav-item">
          <p class="nav-link"><?php echo e(setActivo(Route::currentRouteName())); ?></p>
        </li>
    </ul>
</nav><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/pruebaBlog/resources/views/partials/nav.blade.php ENDPATH**/ ?>