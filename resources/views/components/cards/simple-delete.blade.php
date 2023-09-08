@props([
    'title',
    'size' => 'full',
    'sizing' => [
        'full' => 'col-md-12 p-0',
        'half' => 'col-md-6 p-0',
        'third' => 'col-md-4 p-0',
    ],
    'model',
    'first' => null
])

<div class="{{ $sizing[$size] }}">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
            <div class="card-tools">
                @if(!$first)
                    <button type="button" class="btn btn-tool pt-0"
                            data-toggle="modal"
                            data-target="#modal-delete-item"
                            onclick="copyDeleteInfo('{{ $model->id }}', '{{ class_basename($model) }}')">
                        <i class="fas fa-times"></i>
                    </button>
                @endif
            </div>
        </div>
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
