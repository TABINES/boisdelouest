@props(['active', 'href'])

@php
$classes = ($active ?? false)
            ? 'p-2 lg:px-4 md:mx-2 text-white rounded bg-green-900 hover:bg-gray-200 hover:text-green-900 transition-colors duration-300'
            : 'p-2 lg:px-4 md:mx-2 text-green-900 rounded bg-gray-200 hover:bg-green-900 hover:text-white transition-colors duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'href' => $href]) }}>
    {{ $slot }}
</a>
