<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartment extends FormRequest
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
            'department_name' => [
                'required',
                'unique:departments',
                'min:3',
                'max:64',
                'regex:/^[A-ZА-ЯЁ]+[a-zа-я -]+$/mu'
            ]
        ];
    }
}
