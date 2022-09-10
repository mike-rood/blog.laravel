<?php

namespace App\Http\Requests\Admin\Account;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'role' => 'required|integer',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id'
        ];
    }
    public function messages() 
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Ожидается строковое значение',
            'role.required' => 'Это поле необходимо для заполнения',
            'role.integer' => 'Ожидается числовое значение',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Ожидается строковое значение',
            'email.email' => 'Неправильный формат введённых данных',
            'email.unique' => 'Пользователь с таким email уже существует'
        ];
    }
}
