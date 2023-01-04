@props(['value'])

<label 
@if (Request::is('user/profile'))
{{ $attributes->merge(['class' => 'block font-medium text-gray-500 text-lg']) }}
@endif
{{ $attributes->merge(['class' => 'block font-medium text-white text-lg']) }}
>
    {{ $value ?? $slot }}
</label>
