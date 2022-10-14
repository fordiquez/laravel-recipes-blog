<?php

namespace App\Http\Requests\Main\Recipe;

use App\Models\Recipe;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FilterRequest extends FormRequest
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
        $this->mergeArrayValues('category_id');
        $this->mergeArrayValues('cuisine_id');
        $this->mergeArrayValues('tag_id');
    }

    public function mergeArrayValues(string $key)
    {
        if ($this->query($key) && count($this->query($key))) {
            $this->merge([
                $key => array_map('intval', $this->query($key), [])
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['nullable', 'string'],
            'category_id' => ['nullable', 'array'],
            'category_id.*' => ['nullable', 'integer', Rule::exists('categories', 'id')],
            'cuisine_id' => ['nullable', 'array'],
            'cuisine_id.*' => ['nullable', 'integer', Rule::exists('cuisines', 'id')],
            'tag_id' => ['nullable', 'array'],
            'tag_id.*' => ['nullable', 'integer', Rule::exists('tags', 'id')],
            'level' => ['nullable', 'array'],
            'level.*' => ['nullable', 'string', Rule::in(Recipe::LEVELS)],
        ];
    }
}
