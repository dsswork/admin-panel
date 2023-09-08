<x-admin.layout title="Categories">
    <h1>Categories</h1>
    <x-tables.simple
        :labels="['Name', 'Slug']"
        :fields="['name', 'slug']"
        :models="$categories" title="Categories"
        off="1"
    />
    <x-buttons.add-link
        link="{{ route('categories.create') }}"
    >Add Category</x-buttons.add-link>
</x-admin.layout>
