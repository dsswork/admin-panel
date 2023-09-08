<div class="card card-dark collapsed-card">
    <div class="card-header pr-1 pt-2" style="max-height: 46px;">
        <h3 class="card-title pt-1">{{ $title.' '.($block->name ?? '') }}</h3>

        <div class="card-tools">
            <x-buttons.on-off :model="$block" />
            @if($sortButton)
            <span class="handle ui-sortable-handle p-2">
              <i class="fas fa-ellipsis-v"></i>
              <i class="fas fa-ellipsis-v"></i>
            </span>
            @endif
            @if(!$noDelete)
            <button type="button" class="btn btn-tool pt-0"
                    data-toggle="modal"
                    data-target="#modal-delete-item"
                    onclick="copyDeleteInfo('{{ $block->id }}', '{{ class_basename($block) }}')">
                <i class="fas fa-times"></i>
            </button>
            @endif
            <button type="button" class="btn btn-tool pt-0" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
            </button>
        </div>

    </div>

    <div class="card-body" style="display: none;">
        {{ $slot }}
    </div>
</div>
