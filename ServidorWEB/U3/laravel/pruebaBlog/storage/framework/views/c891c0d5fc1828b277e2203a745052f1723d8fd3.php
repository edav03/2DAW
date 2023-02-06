<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <?php echo $__env->make('partials/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('contenido'); ?>
    </body>
</html><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/pruebaBlog/resources/views/plantilla.blade.php ENDPATH**/ ?>