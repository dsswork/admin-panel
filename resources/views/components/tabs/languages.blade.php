<div class="card card-dark card-outline card-tabs">
    <div class="card-header p-0 pt-1 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            @foreach($languages as $language)
            <li class="nav-item">
                <a class="nav-link @if($loop->index==0) active @endif"
                   id="custom-tabs-three-home-tab" data-toggle="pill"
                   href="#{{ $language->slug }}" role="tab"
                   aria-controls="custom-tabs-three-home"
                   aria-selected="{{ $loop->index==0 ? 'true' : 'false' }}">{{ $language->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-three-tabContent">
            {{ $slot }}
        </div>
    </div>
</div>
