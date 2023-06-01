@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link text-danger fs-5 text-center border-bottom border-danger'
            : 'nav-link text-white fs-5 text-center';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
