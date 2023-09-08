<x-admin.layout title="Edit Backup">
    <h1>Edit Backup</h1>
    <x-forms.put action="{{ route('backups.update', compact(['backup'])) }}">
        <x-cards.simple size="half" title="Edit Backup">
            <x-inputs.input label="Title" :value="$backup->title"/>
            <x-inputs.textarea label="Description" :value="$backup->description"/>
            <x-buttons.submit>Save Backup</x-buttons.submit>
            <x-buttons.restore />
            <x-buttons.download />
            <x-buttons.delete />
        </x-cards.simple>
    </x-forms.put>
    <x-modals.delete :model="$backup" />
    <x-modals.restore :model="$backup" />
    <x-modals.download :$backup />
</x-admin.layout>
