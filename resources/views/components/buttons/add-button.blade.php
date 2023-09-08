<a type="button"
   @isset($onclick) onclick="{{ $onclick }}" @endisset
   class="btn btn-app bg-success m-0">
    <i class="fas fa-plus"></i> {{ $slot }}
</a>
