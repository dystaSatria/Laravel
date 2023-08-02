<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['child','animation'])
<x-splade-transition :child="$child" :animation="$animation" {{ $attributes }}>

{{ $slot ?? "" }}
</x-splade-transition>