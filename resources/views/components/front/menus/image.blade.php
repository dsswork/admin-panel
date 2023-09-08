<li class="nav-item">
    <a href="{{ '/'.$langSlug.$options->link  ?? ''}}" class="nav-link menu-link">{{ $options->title  ?? ''}}</a>
    <img src="{{ $options->image }}" alt="" class="menu-image my-2">
</li>

<style>
    .menu-image {
        display: none;
    }
    .menu-link:hover ~ .menu-image {
        display: block;
    }

</style>
