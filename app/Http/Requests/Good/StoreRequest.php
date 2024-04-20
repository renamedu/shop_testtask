<?php

namespace App\Http\Requests\Good;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'price' => 'required|integer',
            'discount' => 'integer',
            'svoe_proizvodstvo' => 'integer',

            'image' => 'file',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The field is required',
            'title.string' => 'String is required',
            'description.string' => 'String is required',
            'category.required' => 'The field is required',
            'category.string' => 'String is required',
            'price.required' => 'The field is required',
            'price.integer' => 'Integer is required',
            'discount.integer' => 'Integer is required',
            'svoe_proizvodstvo.integer' => 'Integer is required',

            'image.file' => 'File is required',
        ];
    }
}
