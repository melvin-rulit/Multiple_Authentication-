<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'username' => ['alpha','required', 'string', 'max:10'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(){

        return [
            'password.min' => 'Ух ты какой коротенький парольчик. Нужен не меньше 6',
            'password.required' => 'Заполните поле!',
            'username.alpha' => 'Логин не может содержать цифры',
            'username.max' => 'Имя не может бьть длинее 10 символов',
            'username.required' => 'Заполните поле!',

        ];
    }
}
