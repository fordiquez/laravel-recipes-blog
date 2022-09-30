<?php

namespace App\Http\Requests\Admin\Recipe;

use App\Models\Recipe;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'unique:recipes', 'max:255'],
            'cuisine_id' => ['required', 'exists:cuisines,id'],
            'cooking_time' => ['required', 'string'],
            'servings' => ['required', 'numeric'],
            'level' => ['required', 'string', Rule::in(Recipe::LEVELS)],
            'photo' => ['required', 'file'],
            'description' => ['required', 'string', 'max:1000'],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['nullable', 'integer', 'exists:categories,id'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'integer', 'exists:tags,id']
        ];
    }
}
