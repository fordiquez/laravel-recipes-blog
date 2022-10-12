<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class RecipeFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const CATEGORY_ID = 'category_id';
    public const CUISINE_ID = 'cuisine_id';
    public const TAG_ID = 'tag_id';
    public const LEVEL = 'level';
    public const COOKING_TIME = 'cooking_time';
    public const SERVINGS = 'servings';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::CUISINE_ID => [$this, 'cuisineId'],
            self::TAG_ID => [$this, 'tagId'],
            self::LEVEL => [$this, 'level'],
            self::COOKING_TIME => [$this, 'cookingTime'],
            self::SERVINGS => [$this, 'servings'],
        ];
    }

    public function title(Builder $builder, string $value)
    {
        $builder->where(self::TITLE, 'like', "%$value%");
    }

    public function categoryId(Builder $builder, array $value)
    {
        $builder->whereHas('categories', function ($query) use ($value) {
            $query->whereIn(self::CATEGORY_ID, $value);
        });
    }

    public function cuisineId(Builder $builder, array $value)
    {
        $builder->whereHas('cuisine', function ($query) use ($value) {
            $query->whereIn(self::CUISINE_ID, $value);
        });
    }

    public function tagId(Builder $builder, array $value)
    {
        $builder->whereHas('tags', function ($query) use ($value) {
            $query->whereIn(self::TAG_ID, $value);
        });
    }

    public function level(Builder $builder, array $value)
    {
        $builder->whereIn(self::LEVEL, $value);
    }

    public function cookingTime(Builder $builder, string $value)
    {
        $builder->where(self::COOKING_TIME, 'like', "%$value%");
    }

    public function servings(Builder $builder, string $value)
    {
        $builder->where(self::SERVINGS, $value);
    }
}
