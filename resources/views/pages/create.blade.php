<x-admin.layout title="Add Page">
    <h1>Add Page</h1>
    <x-forms.post action="{{ route('pages.store') }}">
        <x-cards.simple size="half" title="Add Page">
            <x-select-category />
            <x-inputs.input label="Name" />
            <x-buttons.submit>Add Page</x-buttons.submit>
        </x-cards.simple>
    </x-forms.post>
</x-admin.layout>
