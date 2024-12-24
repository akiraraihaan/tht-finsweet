@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-yellow-400 w-max px-[22px]'
            : 'w-max px-[22px] hover:text-yellow-600 transition duration-500';
@endphp

<a  {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
