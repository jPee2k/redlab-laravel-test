<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
            // todo first_name & last_name -> regex: alpha - '
            'first_name' => 'required|min:3|max:255|alpha',
            'last_name' => 'required|min:3|max:255|alpha',
            'patronymic' => 'nullable|min:3|max:255|alpha',
            'gender' => 'nullable',
            'salary' => 'nullable|numeric',
            'departments' => 'required',
        ];
    }
}
