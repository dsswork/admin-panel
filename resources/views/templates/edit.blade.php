<x-admin.layout title="Edit Template">
    <h1>Edit Template</h1>
    <x-forms.put action="{{ route('templates.update', compact(['template'])) }}">
        <x-cards.simple size="half" title="Edit Template">
            <input type="text" name="parent_template_id" form="addSubTemplate" value="{{ $template->id }}" hidden>
            <x-inputs.input label="Name" :value="$template->name"/>
            <x-inputs.input label="Slug" :value="$template->slug"/>

            <x-templates.types :type="$template->type"/>

            <x-inputs.image label="Image" :value="$template->image"/>


            <x-templates.level :$template first="1"/>

            <x-buttons.submit>Save Template</x-buttons.submit>

            <x-buttons.add-button
                onclick="document.querySelector('#addSubTemplate').submit()"
            >Add Level</x-buttons.add-button>

            <x-buttons.delete />
        </x-cards.simple>
    </x-forms.put>
    <x-forms.post action="{{ route('templates.add') }}" id="addSubTemplate">

    </x-forms.post>

    <x-modals.delete :model="$template" />
    <x-modals.delete-item />
</x-admin.layout>
