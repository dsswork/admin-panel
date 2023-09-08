<x-admin.layout title="Edit Page">
    <h1>Edit Page</h1>
    <x-forms.put action="{{ route('pages.update', compact(['page'])) }}">
        <x-cards.simple title="Edit Page">
            <x-select-category :categoryId="$page->category_id" />
            <x-inputs.input label="Name" :value="$page->name"/>
            <x-inputs.input label="Slug" :value="$page->slug"/>
            <x-tabs.languages :$languages>
                @foreach($languages as $language)
                <div class="tab-pane fade {{ $loop->index==0 ? 'active show' : '' }}"
                     id="{{ $language->slug }}"
                     role="tabpanel"
                     aria-labelledby="custom-tabs-three-home-tab">

                    <x-pages.meta :$meta :langId="$language->id" />
                    <h2>Blocks</h2>

                    <x-blocks.list :blocks="$page->blocks" :langId="$language->id" :first="$loop->index == 0"/>

                </div>
                @endforeach
                <x-buttons.add-link link="{{ route('pages.add-block', compact(['page'])) }}">Add Block</x-buttons.add-link>
            </x-tabs.languages>
            <x-buttons.submit>Save Page</x-buttons.submit>
            <x-buttons.delete />
        </x-cards.simple>
    </x-forms.put>
    <form id="sortForm"></form>
    <x-modals.delete :model="$page" />
    <x-modals.add-sub-blocks />
    <x-modals.delete-item />
</x-admin.layout>
