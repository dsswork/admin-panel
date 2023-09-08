<x-admin.layout title="Create Backup">
    <h1>Create Backup</h1>
    <x-forms.post action="{{ route('backups.store') }}">
        <x-cards.simple size="half" title="Create Backup">
            <x-inputs.input label="Title" />
            <x-inputs.textarea label="Description" />
            <x-buttons.submit>Create Backup</x-buttons.submit>
        </x-cards.simple>
    </x-forms.post>
</x-admin.layout>
