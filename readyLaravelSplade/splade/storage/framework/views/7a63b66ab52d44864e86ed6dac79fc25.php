<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
        <?php echo e(app('laravel-splade-seo')->renderHead()); ?>

    </head>
    <body class="font-sans antialiased">
        <div id="app" data-components="<?php echo e(json_encode($components)); ?>" data-html="<?php echo e(json_encode($html)); ?>" data-dynamics="<?php echo e(json_encode($dynamics)); ?>" data-splade="<?php echo e(json_encode($splade)); ?>">
<?php echo $ssrBody; ?>

</div>
    </body>
</html>
<?php /**PATH F:\splade\resources\views/root.blade.php ENDPATH**/ ?>