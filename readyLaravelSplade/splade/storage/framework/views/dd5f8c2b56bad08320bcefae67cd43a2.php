<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal33bfdc3b9fbba2379aa24833da18528a = $component; } ?>
<?php $component = ProtoneMedia\Splade\Components\ToastWrapper::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-toast-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\ToastWrapper::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33bfdc3b9fbba2379aa24833da18528a)): ?>
<?php $component = $__componentOriginal33bfdc3b9fbba2379aa24833da18528a; ?>
<?php unset($__componentOriginal33bfdc3b9fbba2379aa24833da18528a); ?>
<?php endif; ?><?php /**PATH F:\splade\storage\framework\views/110ea32c65275481db853a2b2c9e683f.blade.php ENDPATH**/ ?>