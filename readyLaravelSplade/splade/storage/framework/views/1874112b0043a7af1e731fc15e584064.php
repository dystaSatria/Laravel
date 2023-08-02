<SpladeToasts>
    <template #default="toasts">
        <?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'transition'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['animation' => 'opacity','appear' => true,'show' => 'toasts.hasBackdrop','class' => 'fixed z-30 inset-0 bg-black/75']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $component = $__componentOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__componentOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>

        <div class="fixed z-40 inset-0 grid grid-cols-3 grid-flow-row-3 pointer-events-none">
            <div v-for="position in toasts.positions" class="relative">
                <div :class="{
                    'absolute w-full h-full flex flex-col p-4 space-y-4': true,
                    'items-start justify-start': position == 'left-top',
                    'items-center justify-start': position == 'center-top',
                    'items-end justify-start': position == 'right-top',
                    'items-start justify-center': position == 'left-center',
                    'items-center justify-center': position == 'center-center',
                    'items-end justify-center': position == 'right-center',
                    'items-start justify-end': position == 'left-bottom',
                    'items-center justify-end': position == 'center-bottom',
                    'items-end justify-end': position == 'right-bottom'
                }">
                    <template v-for="(toast, toastKey) in toasts.toasts">
                        <template v-if="toast.position == position && !toast.dismissed && toast.html">
                            <SpladeRender
                                @dismiss="toasts.dismissToast(toastKey)"
                                :toast-key="toastKey"
                                :key="toastKey"
                                :html="toast.html"
                            />
                        </template>
                    </template>
                </div>
            </div>
        </div>
    </template>
</SpladeToasts>
<?php /**PATH F:\splade\vendor\protonemedia\laravel-splade\src/../resources/views/components/toast-wrapper.blade.php ENDPATH**/ ?>