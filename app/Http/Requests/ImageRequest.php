<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'tittle' => 'required|unique:galleries,tittle,'.$id.'|max:50',

            'image' => 'required|image|mimes:jpeg,bmp,png'

            'description' => 'required:galleries,description,'.$id.'|min:25'
        ];
    }

    public function messages()

    {

        return [

            'tittle.required' => 'Tittle is required, at least fill a character',

            'tittle.unique' => 'Tittle must unique, take another title',

            'image' => 'Image is required, at least choose a file',

            'description' => 'Description is required, at least fill a character'

        ];

    }
}
