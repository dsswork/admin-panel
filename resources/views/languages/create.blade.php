<x-admin.layout title="Add Language">
    <h1>Add Language</h1>
    <x-forms.post action="{{ route('languages.store') }}">
        <x-cards.simple size="half" title="Add Language">
            <x-inputs.input label="Title" />
            <x-inputs.input label="Slug" />
            <x-buttons.submit>Add Language</x-buttons.submit>
        </x-cards.simple>
    </x-forms.post>
</x-admin.layout>
