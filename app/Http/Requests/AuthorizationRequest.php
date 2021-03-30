<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizationRequest extends FormRequest
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
            'nickname' => ['required', 'string', 'max:36'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'поле :attribute обязательно к заполнению',
            'max' => 'Максимальная длина поля :attribute должна быть не более :max символов',
            'min' => 'Минимальная длина поля :attribute должна быть не более :min символов',
        ];
    }
}
