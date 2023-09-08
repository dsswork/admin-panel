<x-admin.layout title="Edit Language">
    <h1>Edit Language</h1>
    <x-forms.put action="{{ route('languages.update', compact(['language'])) }}">
        <x-cards.simple size="half" title="Edit Language">
            <x-inputs.input label="Title" :value="$language->title"/>
            <x-inputs.input label="Slug" :value="$language->slug"/>
            <x-buttons.submit>Save Language</x-buttons.submit>
            <x-buttons.delete />
        </x-cards.simple>
    </x-forms.put>
    <x-modals.delete :model="$language" />
</x-admin.layout>
