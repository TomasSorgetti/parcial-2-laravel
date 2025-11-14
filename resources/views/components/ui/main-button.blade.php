@props([
'to' => null,
'type' => 'button',
'dataLabel' => '',
'variant' => 'primary',
'size' => 'sm',
'handleClick' => fn () => null,
])

@php
$common = "relative z-10 font-medium rounded-full flex items-center justify-center cursor-pointer shadow transition-all";

$variants = [
'primary' => 'bg-primary text-text-invert hover:bg-primary-hover active:bg-primary-active',
'secondary' => 'bg-background text-text hover:bg-background-bis active:bg-background',
];

$sizes = [
'sm' => 'px-6 py-2 text-xs',
'md' => 'px-8 py-3 text-lg',
'lg' => 'px-12 py-3 text-xl',
];

$variantClass = $variants[$variant] ?? $variants['primary'];
$sizeClass = $sizes[$size] ?? $sizes['sm'];

$classes = "$common $variantClass $sizeClass";
@endphp

@if($to)
<a
    href="{{ $to }}"
    aria-label="{{ $dataLabel }}"
    class="{{ $classes }}"
    {{ $attributes->except(['variant', 'size', 'type', 'dataLabel']) }}>
    {{ $slot ?? 'Link' }}
</a>
@else
<button
    type="{{ $type }}"
    aria-label="{{ $dataLabel }}"
    wire:click="{{ $handleClick }}"
    class="{{ $classes }}"
    {{ $attributes->whereStartsWith('wire:click') }}
    {{ $attributes->except(['variant', 'size', 'to', 'dataLabel', 'wire:click']) }}>
    {{ $slot ?? 'Button' }}
</button>
@endif
