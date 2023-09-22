@props(['name', 'type' => 'text', 'label', 'value' => old($name), 'autocomplete', 'autofocus' => false, 'required' => false, 'min' => null, 'max' => null, 'min_length' => null, 'max_length' => null])

<div>
    <x-forms.erreur champ="{{ $name }}" />

    <label for="{{ $name }}" class="">
        {{ $label }}
    </label>
    <div class="">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ $value }}"
            autocomplete="{{ $autocomplete }}" @if ($autofocus) autofocus @endif
            @if ($required) required @endif
            @if ($min !== null) min="{{ $min }}" @endif
            @if ($max !== null) max="{{ $max }}" @endif
            @if ($min_length !== null) min_length="{{ $min_length }}" @endif
            @if ($max_length !== null) max_length="{{ $max_length }}" @endif
            class="">
    </div>
</div>
