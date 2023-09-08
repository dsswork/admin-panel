<x-admin.layout title="Edit Menu">
    <h1>Edit Menu</h1>
    <x-forms.put action="{{ route('menus.update', compact(['menu'])) }}">
        <x-cards.simple size="half" title="Edit Menu">
            <x-inputs.input label="Name" :value="$menu->name"/>
            <x-menus.types :type="$menu->type"/>
            <x-tabs.languages :$languages>
                @foreach($languages as $language)
                <div class="tab-pane fade {{ $loop->index==0 ? 'active show' : '' }}"
                     id="{{ $language->slug }}"
                     role="tabpanel"
                     aria-labelledby="custom-tabs-three-home-tab">

                     <x-fields.list :block="$menu" :langId="$language->id" noDelete="1"/>

                </div>
                @endforeach
            </x-tabs.languages>
            <x-buttons.submit>Save menu</x-buttons.submit>
            <x-buttons.delete />
        </x-cards.simple>
    </x-forms.put>
    <x-modals.add-sub-menus />
    <x-modals.delete :model="$menu" />
    <x-modals.delete-item />
</x-admin.layout>
