

@props(['path', 'alt', 'class'])

<picture>
    <source srcset="{{ asset($path . '.webp') }}" type="image/webp">
    <img src="{{ asset($path . '.jpg') }}" alt="{{ $alt }}" class="{{ $class }}">
</picture>




