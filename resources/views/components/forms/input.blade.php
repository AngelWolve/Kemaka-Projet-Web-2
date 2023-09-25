@props(['name', 'type' => 'text', 'label' => null, 'value' => old($name), 'autocomplete' => null, 'autofocus' => false, 'required' => false, 'min' => null, 'max' => null, 'min_length' => null, 'max_length' => null, 'placeholder' => null])

<div class="input">

    @if ($label)
        <label for="{{ $name }}">
            {{ $label }}
        </label>
    @endif

    <div>
        <x-forms.erreur champ="{{ $name }}" />
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ $value }}"
            @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
            @if ($autofocus) autofocus @endif @if ($required) required @endif
            @if ($min !== null) min="{{ $min }}" @endif
            @if ($max !== null) max="{{ $max }}" @endif
            @if ($min_length !== null) min_length="{{ $min_length }}" @endif
            @if ($max_length !== null) max_length="{{ $max_length }}" @endif
            @if ($placeholder) placeholder="{{ $placeholder }}" @endif>
    </div>
</div>
