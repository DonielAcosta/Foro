@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-blue-600 dark:border-indigo-600 text-sm text-white'
            : 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-transparent                     text-sm  text-gray-600 dark:text-gray-600 hover:text-white hover:border-blue-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
