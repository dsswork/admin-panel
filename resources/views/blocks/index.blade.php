<x-admin.layout title="General Blocks">
    <x-forms.put action="{{ route('blocks.update-general') }}">
        <h1>General Blocks</h1>
        <x-tabs.languages :$languages>
            @foreach($languages as $language)
                <div class="tab-pane fade {{ $loop->index==0 ? 'active show' : '' }}"
                     id="{{ $language->slug }}"
                     role="tabpanel"
                     aria-labelledby="custom-tabs-three-home-tab">
                    <x-blocks.list :blocks="$blocks" :langId="$language->id" noDelete="1" general="1"/>
                </div>
            @endforeach
        </x-tabs.languages>
        <x-buttons.submit>Save Blocks</x-buttons.submit>
    </x-forms.put>
    <x-modals.add-sub-blocks/>
    <x-modals.delete-item/>
</x-admin.layout>
