<?php

namespace App\Http\Requests\Admin\Blog\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }
    
    public function messages(): array 
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Несоответствие типа введённых данных',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Несоответствие типа введённых данных',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'ID категории должно быть целым числом',
            'category_id.exists' => 'ID категории отсутствует в базе данных',
            'tag_ids.array' => 'Несоответствие типа введённых данных'
        ];
    }
}
