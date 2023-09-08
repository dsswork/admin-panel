@props([
    'title',
    'size' => 'full',
    'sizing' => [
        'full' => 'col-md-12 p-0',
        'half' => 'col-md-6 p-0',
        'third' => 'col-md-4 p-0',
    ],
])

<div class="{{ $sizing[$size] }}">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
