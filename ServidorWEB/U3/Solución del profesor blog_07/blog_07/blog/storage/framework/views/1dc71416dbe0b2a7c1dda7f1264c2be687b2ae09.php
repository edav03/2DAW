<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>
        <?php echo $__env->yieldContent('titulo'); ?>
        </title>
    </head>
    <body>
        <div class="container">
            <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div style="text-align: right">
                <?php echo e(fechaActual("d/m/Y")); ?>

            </div>
            <?php echo $__env->yieldContent('contenido'); ?>
        </div>
    </body>
</html><?php /**PATH /home/alumno/ProyectosLaravel/blog/resources/views/plantilla.blade.php ENDPATH**/ ?>