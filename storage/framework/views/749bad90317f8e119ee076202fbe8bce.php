<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    
    <body class="antialiased">
        <?php echo $__env->yieldContent('content'); ?>

        
    </body>

</html><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/layouts/app.blade.php ENDPATH**/ ?>