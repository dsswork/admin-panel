<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:1',
            'slug' => 'required|string|max:255|min:2|unique:App\Models\Page,slug',
            'category_id' => 'required|numeric|exists:App\Models\Category,id'
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
            'slug' => '/'.str($this->name)->slug(),
            'category_id' => $this->category_id
        ]);
    }
}
