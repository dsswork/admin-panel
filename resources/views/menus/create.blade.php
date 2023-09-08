<x-admin.layout title="Add Menu">
    <h1>Add Block</h1>
    <div class="row">
        @foreach($templates as $template)
            <div class="col-md-4 card-form"
                 onclick="document.querySelector('#block{{ $template->id }}').submit()">
                <x-forms.post action="{{ route('menus.store') }}" id="block{{ $template->id }}">
                    <input type="text" name="template_id" value="{{ $template->id }}" hidden>
                    <x-cards.simple title="{{ $template->name }}">
                        <img src="{{ $template->image }}" alt="" style="width: 100%">
                    </x-cards.simple>
                </x-forms.post>
            </div>
        @endforeach
    </div>
</x-admin.layout>
<style>
    .card-form {
        cursor: pointer;
        transition: transform .2s;
    }

    .card-form:hover {
        transform: scale(1.03);
    }
</style>
