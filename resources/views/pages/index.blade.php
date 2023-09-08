<x-admin.layout title="Pages">
    <h1>Pages</h1>
    <x-tables.simple
        :labels="['Name', 'Slug']"
        :fields="['name', 'slug']"
        :models="$pages" title="Pages"
        off="1"
    />
    <x-buttons.add-link
        link="{{ route('pages.create') }}"
    >Add Page</x-buttons.add-link>
</x-admin.layout>
