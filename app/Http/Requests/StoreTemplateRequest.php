<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTemplateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min:2',
            'type' => 'required|string|max:255|min:2',
            'slug' => 'required|string|max:255|min:2|unique:App\Models\Template,slug',
            'image' => 'required|image',
            'fields' => 'required|json'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => (string) str($this->name)->title(),
            'type' => $this->type,
            'image' => $this->image,
            'slug' => (string) str($this->name)->slug(),
            'fields' => json_encode(array_values($this->fields ?? []))
        ]);
    }
}
