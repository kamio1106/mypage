<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaryPost extends FormRequest
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
            'password' => 'required|digits_between:16,16|',
            'title' => 'required|max:255',
            'content' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png|dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
        ];
    }
}
