@props([
    'fieldTypes' => ['Input', 'Textarea', 'Image', 'Editor', 'Color', 'Date'],
    'fields',
    'model',
    'first' => null
])

<x-cards.simple-delete title="Fields" :$model :$first>
    <div class="row">
        <div class="col-md-4">
            @foreach($fieldTypes as $type)
                <x-templates.field-button :label="$type" :id="$model->id"/>
            @endforeach
        </div>
        <div class="col-md-8" id="fieldsWrapper{{ $model->id }}"
             style="border: 2px grey solid; border-radius: 5px; padding: 5px">
            @foreach(json_decode($fields) ?? [] as $field)
                <div class="card card-dark" id="field{{ $loop->index }}">
                    <div class="card-header">
                        <h3 class="card-title">{{ $field->label }}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"
                                    onclick=removeField(`{{ $loop->index }}`)>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" value="{{ $field->type }}"
                               name="fields[{{ $model->id }}][{{ $loop->index }}][type]" hidden>
                        <x-inputs.input label="Label" name="fields[{{ $model->id }}][{{ $loop->index }}][label]"
                                        value="{{ $field->label }}"/>
                        <x-inputs.input label="Name" name="fields[{{ $model->id }}][{{ $loop->index }}][name]"
                                        value="{{ $field->name }}" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-cards.simple-delete>

<script>
    function addField(type, label, id) {
        let rand = Math.floor(Math.random() * (999 - 111)) + 111;
        let wrapper = document.querySelector('#fieldsWrapper' + id)
        let field = document.createElement('div')
        field.className = 'card card-dark'
        field.id = 'field' + rand

        field.innerHTML = `<div class="card-header">
                                <h3 class="card-title">${label}</h3>
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="remove"
                                          onclick=removeField(` + rand + `)>
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="text" value="${type}" name="fields[${id}][${rand}][type]" hidden>
                                <x-inputs.input label="Label" name="fields[${id}][${rand}][label]" />
                                <x-inputs.input label="Name" name="fields[${id}][${rand}][name]" />
                            </div>`
        wrapper.append(field)
    }

    function removeField(id) {
        setTimeout(() => {
            document.querySelector('#field' + id).remove()
        }, 500);
    }
</script>
