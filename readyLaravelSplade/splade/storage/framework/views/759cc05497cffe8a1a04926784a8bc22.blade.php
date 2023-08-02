<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['animation','appear','show'])
<x-splade-transition :animation="$animation" :appear="$appear" :show="$show" {{ $attributes }}>

{{ $slot ?? "" }}
</x-splade-transition>