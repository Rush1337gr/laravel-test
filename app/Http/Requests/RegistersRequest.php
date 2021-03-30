<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistersRequest extends FormRequest
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
            'nickname' => ['required', 'string', 'max:36','unique:users,nickname'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'same:password-confirmation'],
            'password-confirmation' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'поле :attribute обязательно к заполнению',
            'max' => 'Максимальная длина поля :attribute должна быть не более :max символов',
            'min' => 'Минимальная длина поля :attribute должна быть не более :min символов',
            'email' => ':attribute введите корректную почту',
            'nickname.unique' => 'такой :attribute ник уже занят',
            'email.unique' => 'данная :attribute почта уже зарегистрирована',
            'same' => 'пароли должны совподать'
        ];
    }


}
