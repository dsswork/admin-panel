<button type="button"
   @isset($onclick) onclick="{{ $onclick }}" @endisset
        data-toggle="modal"
        data-target="#{{ $modalId }}"
        class="btn btn-app bg-success m-0">
    <i class="fas fa-plus"></i> {{ $slot }}
</button>
