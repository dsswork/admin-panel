<div class="card card-dark collapsed-card">
    <div class="card-header pr-1 pt-2" style="max-height: 46px;">
        <h3 class="card-title pt-1">{{ $title }}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool pt-0" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
            </button>
        </div>

    </div>

    <div class="card-body" style="display: none;">
        {{ $slot }}
    </div>
</div>
