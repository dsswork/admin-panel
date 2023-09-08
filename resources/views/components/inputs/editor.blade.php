@php

    if(!isset($name)) {
        $name = (string) str($label)->snake();
    }

    $old = old($name)
@endphp

<div class="form-group">
    <label for="{{ str($label)->slug() }}">{{ $label }}</label>
    <textarea id="{{ str($label)->slug() }}"
              type="text"
              name="{{ $name }}"
              class="tinyMCE">{{ isset($value) ? old($name, $value) : old($name) }}</textarea>

    @error($name)
    {{ $message }}
    @enderror

</div>
