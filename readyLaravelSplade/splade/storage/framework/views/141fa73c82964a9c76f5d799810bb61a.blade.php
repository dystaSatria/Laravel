<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['panel'])
<x-splade-dialog :panel="$panel" {{ $attributes }}>

{{ $slot ?? "" }}
</x-splade-dialog>