<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Admin Panel" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">MAIN</li>
                <x-admin.nav-link href="{{ route('languages.index') }}" icon="fa-language" title="Languages" />
                <li class="nav-header">PAGES</li>
                <x-admin.nav-link href="{{ route('categories.index') }}" icon="fa-list" title="Categories" />
                <x-admin.nav-link href="{{ route('pages.index') }}" icon="fa-page4" title="Pages" />
                <x-admin.nav-link href="{{ route('blocks.index') }}" icon="fa-th-large" title="General Blocks" />

                <li class="nav-header">MENU</li>
                <x-admin.nav-link href="{{ route('menus.index') }}" icon="fa-ellipsis-h" title="Menus" />
                <li class="nav-header">SYSTEM</li>
                <x-admin.nav-link href="{{ route('templates.index') }}" icon="fa-code" title="Templates" />
                <x-admin.nav-link href="{{ route('backups.index') }}" icon="fa-download" title="Backups" />
                <x-admin.nav-link href="{{ route('events.index') }}" icon="fa-history" title="History" />
                <x-admin.nav-link href="/admin/docs" icon="fa-question" title="Docs"/>
            </ul>
        </nav>
    </div>
</aside>
