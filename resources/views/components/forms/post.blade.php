<form action="{{ $action }}"
      method="post"
      enctype="multipart/form-data"
      @isset($id)
        id="{{ $id }}"
      @endisset
>
    @csrf
    {{ $slot }}
</form>
