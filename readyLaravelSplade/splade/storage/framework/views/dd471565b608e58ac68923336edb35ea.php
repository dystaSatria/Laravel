<?php $data = $formData() ?>

<SpladeForm <?php echo e($attributes->rejectWhenBlank('id')->except('class')); ?>

    <?php if($data['data']): ?> :default="<?php echo \Illuminate\Support\Js::from($data['data'])->toHtml() ?>" <?php else: ?> :default="<?php echo $data['json']; ?>" <?php endif; ?>
    :scroll-on-error="<?php echo \Illuminate\Support\Js::from($scrollOnError)->toHtml() ?>"
    :splade-id="<?php echo \Illuminate\Support\Js::from($spladeId)->toHtml() ?>"
    :submit-on-change="<?php echo \Illuminate\Support\Js::from($submitOnChange)->toHtml() ?>"
    :escape-validation-messages="<?php echo \Illuminate\Support\Js::from($escapeValidationMessages)->toHtml() ?>"
    :preserve-scroll="<?php echo \Illuminate\Support\Js::from($preserveScroll)->toHtml() ?>"
    :background="<?php echo \Illuminate\Support\Js::from($background)->toHtml() ?>"
    :debounce="<?php echo \Illuminate\Support\Js::from($debounce)->toHtml() ?>"
    :accept-header="<?php echo \Illuminate\Support\Js::from($acceptHeader)->toHtml() ?>"
>
    <template #default="<?php echo $scope; ?>">
        <form data-splade-id="<?php echo e($spladeId); ?>" v-bind="form.$attrs" @submit.prevent="form.submit" <?php echo e($attributes->only(['action', 'method'])->merge(['method' => 'POST'])); ?>>
            <fieldset v-bind:disabled="form.processing" <?php echo e($attributes->only('class')); ?>>
                <?php echo e($slot); ?>

            </fieldset>
        </form>
    </template>
</SpladeForm><?php /**PATH F:\splade\vendor\protonemedia\laravel-splade\src/../resources/views/functional/form.blade.php ENDPATH**/ ?>