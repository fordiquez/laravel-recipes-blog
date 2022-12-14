<?php

namespace App\Http\Requests\Admin\Recipe;

use App\Models\Recipe;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->title),
            'published' => $this->boolean('published')
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
            'slug' => ['required', 'string', 'max:255', Rule::unique('recipes')->ignore($this->recipe->id)],
            'cuisine_id' => ['required', Rule::exists('cuisines', 'id')],
            'user_id' => ['required', Rule::exists('users', 'id')],
            'cooking_time' => ['required', 'string'],
            'servings' => ['required', 'numeric'],
            'level' => ['required', 'string', Rule::in(Recipe::LEVELS)],
            'published' => ['boolean'],
            'photo' => ['file'],
            'description' => ['required', 'string', 'max:65535'],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'integer', Rule::exists('tags', 'id')]
        ];
    }
}
