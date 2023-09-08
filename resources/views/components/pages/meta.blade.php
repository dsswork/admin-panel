<x-cards.collapsable-simple title="Meta">
    <x-inputs.input label="Title" name="meta[{{ $langId }}][title]"
                    :value="$meta->{ $langId }->title ?? ''" />
    <x-inputs.textarea label="Description" name="meta[{{ $langId }}][description]"
                       :value="$meta->{ $langId }->description ?? ''" />
    <x-inputs.input label="Keywords" name="meta[{{ $langId }}][keywords]"
                    :value="$meta->{ $langId }->keywords ?? ''" />
</x-cards.collapsable-simple>
