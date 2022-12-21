@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-white text-lg']) }}>
    {{ $value ?? $slot }}
</label>
