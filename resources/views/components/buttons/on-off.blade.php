<div class="custom-control custom-switch d-inline">
    <input type="checkbox"
           onchange="onOff('{{ $model->id }}', '{{ class_basename($model) }}', '{{ csrf_token() }}', '{{ route("admin.on-off") }}')"
           class="custom-control-input" id="on{{ $model->id }}"
           @checked($model->show)
    >
    <label class="custom-control-label" for="on{{ $model->id }}"></label>
</div>
