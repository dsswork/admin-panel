<x-admin.layout title="Edit Category">
    <h1>Edit Category</h1>
    <x-forms.put action="{{ route('categories.update', compact(['category'])) }}">
        <x-cards.simple size="half" title="Edit Category">
            <x-inputs.input label="Name" :value="$category->name"/>
            <x-inputs.input label="Slug" :value="$category->slug"/>
            <x-tabs.languages :$languages>
                @foreach($languages as $language)
                <div class="tab-pane fade {{ $loop->index==0 ? 'active show' : '' }}"
                     id="{{ $language->slug }}"
                     role="tabpanel"
                     aria-labelledby="custom-tabs-three-home-tab">
                    <x-inputs.input
                        label="Title"
                        name="title[{{ $language->id }}][title]"
                        value="{{ $category->title->{ $language->id }->title ?? '' }}"/>
                </div>
                @endforeach
            </x-tabs.languages>
            <x-buttons.submit>Save Category</x-buttons.submit>
            <x-buttons.delete />
        </x-cards.simple>
    </x-forms.put>
    <x-modals.delete :model="$category" />
</x-admin.layout>
