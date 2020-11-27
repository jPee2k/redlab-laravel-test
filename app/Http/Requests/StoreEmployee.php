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
            'first_name' => [
                'required',
                'min:2',
                'max:255',
                // Иван, Саша-Барон, Ахмед-шах
                'regex:/^(?!-)(?!.*--)([A-ZА-ЯЁ]{1}[a-zа-яё\-]+)+(?<!-)$/mu'
            ],
            'last_name' => [
                'required',
                'min:2',
                'max:255',
                'regex:/^(?!-)(?!.*--)([A-ZА-ЯЁ]{1}[a-zа-яё\-]+)+(?<!-)$/mu'
            ],
            // 'first_name' => 'required|min:2|max:255|alpha',
            // 'last_name' => 'required|min:2|max:255|alpha',
            'patronymic' => 'nullable|min:4|max:255|alpha',
            'gender' => 'nullable',
            'salary' => 'nullable|numeric|between:0,999999.99',
            'departments' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Поле с именем обязательно к заполнению!',
            'first_name.min' => 'Имя не может содержать менее 2-х символов!',
            'first_name.max' => 'Превышен лимит символов!',
            'first_name.regex' => 'Допустимый формат имён: "Григорий", "Мак-Кинли", "Кемаль-паша"',

            'last_name.required' => 'Поле с фамилией обязательно к заполнению!',
            'last_name.min' => 'Фамилия не может содержать менее 2-х символов!',
            'last_name.max' => 'Превышен лимит символов!',
            'last_name.regex' => 'Допустимый формат фамилий: "Тихий", "Салтыкова-Щедрина"',

            'patronymic.alpha' => 'Отчество может содержать только буквы!',
            'patronymic.min' => 'Отчество не может содержать менее 4-х букв!',
            'patronymic.max' => 'Превышен лимит символов!',

            'salary.numeric' => 'Допустимы полько цифры!',

            'departments.required' => 'Сотрудник должен входить в состав хотя бы одного подразделения!'
        ];
    }
}
