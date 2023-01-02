<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'brand' => 'required|min:3|max:100',
            'model' => 'required|min:1|max:255',
            'description' => 'required|min:5|max:65535',
            'price' => 'required|min:0',
            'category_id' => 'required',
            'type_id' => 'required'
        ];
    }
}
