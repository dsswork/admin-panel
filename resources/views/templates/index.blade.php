<x-admin.layout title="Templates">
    <h2>General Templates</h2>
    <x-tables.simple
        :labels="['Name', 'Slug']"
        :fields="['name', 'slug']"
        :models="$generalTemplates" title="General Templates"
        off="1"
    />
    <h2>Page Templates</h2>
    <x-tables.simple
        :labels="['Name', 'Slug']"
        :fields="['name', 'slug']"
        :models="$pageTemplates" title="Page Templates"
        off="1"
    />
    <h2>Menu Templates</h2>
    <x-tables.simple
        :labels="['Name', 'Slug']"
        :fields="['name', 'slug']"
        :models="$menuTemplates" title="Menu Templates"
        off="1"
    />
    <x-buttons.add-link
        link="{{ route('templates.create') }}"
    >Add Template</x-buttons.add-link>
</x-admin.layout>
