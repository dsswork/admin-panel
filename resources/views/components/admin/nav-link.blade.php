<li class="nav-item">
    <a href="{{ $href }}"
       class="nav-link @if(str_contains(url()->current(), $slug ?? strtolower($title))) bg-gray active @endif">
        <i class="nav-icon fas {{ $icon }}"></i>
        <p>{{ $title }}</p>
    </a>
</li>
