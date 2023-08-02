<SpladeDropdown <?php echo e($attributes->except('class')
    ->mergeVueBinding(':inline', $inline)
    ->mergeVueBinding(':teleport', $teleport)
    ->mergeVueBinding(':close-on-click', $closeOnClick)); ?> :splade-id="<?php echo \Illuminate\Support\Js::from($spladeId)->toHtml() ?>">
    <template #button="dropdown">
        <button
            type="button"
            aria-haspopup="true"
            <?php echo e($attributes->only('class')->when($inline && !$attributes->has('class'), fn($attributes) => $attributes->class('inline'))); ?>

            :class="{ 'cursor-not-allowed': dropdown.disabled }"
            :disabled="dropdown.disabled"
            @click.prevent="dropdown.toggle"
        >
            <?php echo e($trigger); ?>

        </button>
    </template>

    <template #default="dropdown">
        <?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => $teleport ? 'teleport' : 'slot'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['to' => 'body']); ?>
            <div data-splade-dropdown-id="<?php echo e($spladeId); ?>" class="absolute z-40">
                <?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'transition'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['show' => 'dropdown.opened']); ?>
                    <?php echo e($slot); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $component = $__componentOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__componentOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $component = $__componentOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__componentOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>
    </template>
</SpladeDropdown><?php /**PATH F:\splade\vendor\protonemedia\laravel-splade\src/../resources/views/components/dropdown.blade.php ENDPATH**/ ?>