@php
    if(!isset($name)) {
        $name = (string) str($label)->snake();
    }

    $old = old($name)
@endphp

<div class="form-group">
    <label for="{{ str($label)->slug() }}">{{ $label }}</label>
    <div class="custom-file">
        <input type="text" value="{{ $value ?? '' }}" name="{{ $name }}" hidden>
        <input id="{{ str($label)->slug() }}"
               type="file"
               name="{{ $name }}"

               @if(isset($value)||isset($old))
               value="{{ isset($value) ? old($name, $value) : old($name) }}"
               @endif
               class="custom-file-input">

        @error($name)
        {{ $message }}
        @enderror

        <label class="custom-file-label" for="customFile">{{ $value ?? 'Choose file' }}</label>
    </div>
</div>
