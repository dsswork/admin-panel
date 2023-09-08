@props([
    'first' => null,
    'template'
])

<x-templates.fields :fields="$template->fields" :model="$template" :$first/>
<input type="text" form="addSubTemplate" name="template_id"
       value="{{ $template->id }}" hidden>

@if($template->template)
    <x-templates.level :fields="$template->template->fields" :template="$template->template" :model="$template"/>
@endif
