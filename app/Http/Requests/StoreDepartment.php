<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
                Rule::unique('departments', 'department_name')->ignore($this->department),
                'required',
                'min:3',
                'max:64',
                'regex:/^[A-ZА-ЯЁ]+[a-zа-я0-9 -]+$/mu'
            ]
        ];
    }

    public function messages()
    {
        return [
            'unique' => 'Отдел с таким названием уже существует!',
            'required' => 'Необходимо указать название отдела!',
            'min' => 'Название отдела должно содержать минимум 3-и символа!',
            'max' => 'Превышен лимит символов!',
            'regex' => 'Название отдела должо содержать заглавную букву. Может иметь пробельные символы, дефис и цифры'
        ];
    }
}
