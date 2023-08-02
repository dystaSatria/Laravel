<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['width' => '48']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['width' => '48']); ?>
<?php foreach (array_filter((['width' => '48']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
?>

<?php if (isset($component)) { $__componentOriginal9f93807798659eeec3d6d3a3f12702f0 = $component; } ?>
<?php $component = ProtoneMedia\Splade\Components\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->except('width'))]); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <?php echo e($trigger); ?>

     <?php $__env->endSlot(); ?>

    <div class="mt-2 <?php echo e($width); ?> rounded-md shadow-lg ring-1 ring-black ring-opacity-5 py-1 bg-white">
        <?php echo e($content); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f93807798659eeec3d6d3a3f12702f0)): ?>
<?php $component = $__componentOriginal9f93807798659eeec3d6d3a3f12702f0; ?>
<?php unset($__componentOriginal9f93807798659eeec3d6d3a3f12702f0); ?>
<?php endif; ?>
<?php /**PATH F:\splade\resources\views/components/dropdown.blade.php ENDPATH**/ ?>