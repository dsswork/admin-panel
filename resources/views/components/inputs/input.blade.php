@php

if(!isset($name)) {
    $name = (string) str($label)->snake();
}

$old = old($name)
@endphp

<div class="form-group">
    <label for="{{ str($label)->slug() }}">{{ $label }}</label>
    <input id="{{ str($label)->slug() }}"
           type="text"
           name="{{ $name }}"

           @if(isset($value)||isset($old))
           value="{{ isset($value) ? old($name, $value) : old($name) }}"
           @endif
           class="form-control"

    >

    @error($name)
        {{ $message }}
    @enderror

</div>
