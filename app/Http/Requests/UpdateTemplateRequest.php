<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTemplateRequest extends FormRequest
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
            'slug' => 'required|string|max:255|min:2',
            'image' => 'required',
            'fields' => 'nullable|array'
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
            'slug' => $this->slug,
            'fields' => $this->fields
        ]);
    }
}
