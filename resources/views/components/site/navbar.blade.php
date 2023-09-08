<ul class="navbar-nav items">
    @foreach($menus as $menu)
        <x-dynamic-component
            :component="'front.menus.'.$menu->template->slug"
            :options="$menu->options"
            :menus="$menu->menus"
            :$langSlug
        />
    @endforeach
</ul>
