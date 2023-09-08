<x-admin.layout title="Add Template">
    <h1>Add Template</h1>
    <x-forms.post action="{{ route('templates.store') }}">
        <x-cards.simple size="half" title="Add Template">
            <x-inputs.input label="Name" />
            <x-templates.types />
            <x-inputs.image label="Image" />
            <x-buttons.submit>Add Template</x-buttons.submit>
        </x-cards.simple>
    </x-forms.post>
</x-admin.layout>

