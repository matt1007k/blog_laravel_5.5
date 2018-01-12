<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagUpdateRequest extends FormRequest
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
    {   //slug evitamos que se llame asi mismo en la validación, su id para que no tengamos ningún error
        // con . $this->tag
        return [
            'name' => 'required',
            'slug' => 'required|unique:tags,slug,' . $this->tag,
        ];
    }
}
