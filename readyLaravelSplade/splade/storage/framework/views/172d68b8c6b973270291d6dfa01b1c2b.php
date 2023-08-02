<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal5b19a9f8a5047f5cecb7555988b1287c = $component; } ?>
<?php $component = ProtoneMedia\Splade\Components\Slot::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-slot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Slot::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b19a9f8a5047f5cecb7555988b1287c)): ?>
<?php $component = $__componentOriginal5b19a9f8a5047f5cecb7555988b1287c; ?>
<?php unset($__componentOriginal5b19a9f8a5047f5cecb7555988b1287c); ?>
<?php endif; ?><?php /**PATH F:\splade\storage\framework\views/dd192fd8e58c684103e2c6782c1be73e.blade.php ENDPATH**/ ?>