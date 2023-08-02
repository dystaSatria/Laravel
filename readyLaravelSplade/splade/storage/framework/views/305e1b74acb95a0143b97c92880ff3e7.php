<?php $flatpickrOptions = $flatpickrOptions() ?>

<SpladeInput
    <?php echo e($attributes->only(['v-if', 'v-show', 'v-for', 'class'])->class(['hidden' => $isHidden()])); ?>

    :flatpickr="<?php echo \Illuminate\Support\Js::from($flatpickrOptions)->toHtml() ?>"
    :js-flatpickr-options="<?php echo $jsFlatpickrOptions; ?>"
    v-model="<?php echo e($vueModel()); ?>"
    #default="inputScope"
>
    <label class="block">
        <?php echo $__env->renderWhen($label, 'splade::form.label', ['label' => $label], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

        <div class="flex rounded-md border border-gray-300 shadow-sm">
            <?php if($prepend): ?>
                <span :class="{ 'opacity-50': inputScope.disabled && <?php echo json_encode(!$alwaysEnablePrepend, 15, 512) ?> }" class="inline-flex items-center px-3 rounded-l-md border border-t-0 border-b-0 border-l-0 border-gray-300 bg-gray-50 text-gray-500">
                    <?php echo $prepend; ?>

                </span>
            <?php endif; ?>

            <input <?php echo e($attributes->except(['v-if', 'v-show', 'v-for', 'class'])->class([
                'block w-full border-0 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed',
                'rounded-md' => !$append && !$prepend,
                'min-w-0 flex-1 rounded-none' => $append || $prepend,
                'rounded-l-md' => $append && !$prepend,
                'rounded-r-md' => !$append && $prepend,
            ])->merge([
                'name' => $name,
                'type' => $type,
                'data-validation-key' => $validationKey(),
            ])->when(!$flatpickrOptions, fn($attributes) => $attributes->merge([
                'v-model' => $vueModel(),
            ]))); ?>

            />

            <?php if($append): ?>
                <span :class="{ 'opacity-50': inputScope.disabled && <?php echo json_encode(!$alwaysEnableAppend, 15, 512) ?> }" class="inline-flex items-center px-3 rounded-r-md border border-t-0 border-b-0 border-r-0 border-gray-300 bg-gray-50 text-gray-500">
                    <?php echo $append; ?>

                </span>
            <?php endif; ?>
        </div>
    </label>

    <?php echo $__env->make('splade::form.help', ['help' => $help], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->renderWhen($showErrors, 'splade::form.error', ['name' => $validationKey()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
</SpladeInput><?php /**PATH F:\splade\vendor\protonemedia\laravel-splade\src/../resources/views/form/input.blade.php ENDPATH**/ ?>