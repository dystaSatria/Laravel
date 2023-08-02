<div class="min-h-screen bg-gray-100">
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <?php echo e($header); ?>

        </div>
    </header>

    <!-- Page Content -->
    <main>
        <?php echo e($slot); ?>

    </main>
</div>
<?php /**PATH F:\splade\resources\views/layouts/app.blade.php ENDPATH**/ ?>