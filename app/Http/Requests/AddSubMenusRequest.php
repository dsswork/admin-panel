<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubMenusRequest extends FormRequest
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
            'menu_id' => 'required|numeric|exists:App\Models\Menu,id',
            'template_id' => 'required|numeric|exists:App\Models\Template,id',
            'number' => 'required|numeric|min:1'
        ];
    }
}
