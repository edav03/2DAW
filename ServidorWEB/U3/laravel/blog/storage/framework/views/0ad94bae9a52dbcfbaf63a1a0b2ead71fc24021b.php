<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $__env->yieldContent('titulo'); ?>
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            *{
                list-style: none;
            }
            article{
                margin-top: 70px;
            }

            p#route{
                position: fixed;
                right: 10;
                font-size: 1.5rem;
            }
            a{
                color: white;
            }
        </style>
    </head>
    <body>
        <header></header>

        <article><?php echo $__env->yieldContent('contenido'); ?></article>
    </body>
</html>
<?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edison/Documents/2DAW/ServidorWEB/U3/laravel/blog/resources/views/plantilla.blade.php ENDPATH**/ ?>