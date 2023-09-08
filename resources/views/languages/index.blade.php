<x-admin.layout title="Languages">
    <h1>Languages</h1>
    <x-tables.simple
        :labels="['Title', 'Slug']"
        :fields="['title', 'slug']"
        :models="$languages" title="Languages"/>
    <x-buttons.add-link
        link="{{ route('languages.create') }}"
    >Add Language</x-buttons.add-link>
</x-admin.layout>
