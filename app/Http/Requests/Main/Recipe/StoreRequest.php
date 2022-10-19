<?php

namespace App\Http\Requests\Main\Recipe;

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
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->title),
            'user_id' => auth()->user()->id
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('recipes')],
            'cuisine_id' => ['required', Rule::exists('cuisines', 'id')],
            'user_id' => ['required', Rule::exists('users', 'id')],
            'cooking_time' => ['required', 'string'],
            'servings' => ['required', 'numeric'],
            'level' => ['required', 'string', Rule::in(Recipe::LEVELS)],
            'photo' => ['required', 'file'],
            'description' => ['required', 'string', 'max:65535'],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'integer', Rule::exists('tags', 'id')],
            'ingredients' => ['required', 'array'],
            'ingredients.*.recipe_id' => ['nullable'],
            'ingredients.*.title' => ['string', 'max:255'],
            'steps' => ['required', 'array'],
            'steps.*' => ['required', 'array'],
            'steps.*.recipe_id' => ['nullable'],
            'steps.*.step' => ['required', 'max:20'],
            'steps.*.description' => ['required', 'string', 'max:1000'],
            'steps.*.photo' => ['required', 'file'],
        ];
    }
}
