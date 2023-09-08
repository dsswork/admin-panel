<x-admin.layout title="Add Category">
    <h1>Add Category</h1>
    <x-forms.post action="{{ route('categories.store') }}">
        <x-cards.simple size="half" title="Add Category">
            <x-inputs.input label="Name" />
            <x-buttons.submit>Add Category</x-buttons.submit>
        </x-cards.simple>
    </x-forms.post>
</x-admin.layout>
