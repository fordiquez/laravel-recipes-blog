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

    protected function prepareForValidation()
    {
        if ($this->query('category_id') && count($this->query('category_id'))) {
            $this->merge([
                'category_id' => array_map('intval', $this->query('category_id', []))
            ]);
        }
        if ($this->query('cuisine_id') && count($this->query('cuisine_id'))) {
            $this->merge([
                'cuisine_id' => array_map('intval', $this->query('cuisine_id', []))
            ]);
        }
        if ($this->query('tag_id') && count($this->query('tag_id'))) {
            $this->merge([
                'tag_id' => array_map('intval', $this->query('tag_id', []))
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
            'level.*' => ['nullable', Rule::in(Recipe::LEVELS)],
        ];
    }
}
