<form action="{{ $action }}"
      method="post"
      @isset($id)
        id="{{ $id }}"
      @endisset
>
    @csrf
    @method('delete')
    {{ $slot }}
</form>
