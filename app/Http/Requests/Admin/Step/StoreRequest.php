<?php

namespace App\Http\Requests\Admin\Step;

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
            'recipe_id' => ['required', 'exists:recipes,id'],
            'step' => ['required', 'integer'],
            'description' => ['required', 'string', 'max:1000'],
            'photo' => ['file']
        ];
    }
}
