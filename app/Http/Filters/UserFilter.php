<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const FULL_NAME = 'full_name';

    protected function getCallbacks(): array
    {
        return [
            self::FULL_NAME => [$this, 'fullName'],
        ];
    }

    public function fullName(Builder $builder, string $value)
    {
        $builder->where('first_name', 'like', "%$value%")->orWhere('last_name', 'like', "%$value%");
    }
}
