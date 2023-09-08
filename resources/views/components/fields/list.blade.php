<x-cards.collapsable :title="$block->template->name"
                     :$block
                     :sortButton="$first ?? null"
                     :noDelete="$noDelete ?? null"
>
    @if($first ?? null)
        <x-inputs.input label="Name" name="names[{{ $block->id }}]" :value="$block->name"/>
    @endif

    @if($block->template->type=='general' && !$general)
        <a class="btn btn-dark" href="{{ route('blocks.index') }}">Edit General Blocks</a>
    @else
        @if($first ?? null)
            <input type="text" name="sort[]" value="{{ $block->id }}" form="sortForm" hidden>
        @endif

        @foreach(json_decode($block->template->fields) ?? [] as $field)
            <x-dynamic-component
                :component="'inputs.'.$field->type"
                :label="$field->label"
                :value="$block->options->{ $langId }->{ $field->name } ?? ''"
                name="blocks[{{ $block->id }}][{{ $langId }}][{{ $field->name }}]">
            </x-dynamic-component>
        @endforeach


        @if(class_basename($block)=='Block')
            @if($block->template->template)
                <x-blocks.list :blocks="$block->blocks" :$langId :first="1"/>

                <x-buttons.add-modal modalId="addSubBlocks"
                                     onclick="copyBlockInfo('{{ $block->id }}', '{{ $block->template->template->id }}')"
                >Add Sub Blocks
                </x-buttons.add-modal>
            @endif
        @endif

        @if(class_basename($block)=='Menu')
            @if($block->template->template)
                <x-blocks.list :blocks="$block->menus" :$langId :first="1"/>

                <x-buttons.add-modal modalId="addSubMenus"
                                     onclick="copyBlockInfo('{{ $block->id }}', '{{ $block->template->template->id }}')"
                >Add Sub Menu
                </x-buttons.add-modal>
            @endif
        @endif

    @endif
</x-cards.collapsable>
