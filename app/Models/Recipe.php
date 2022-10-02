<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'cuisine_id',
        'cooking_time',
        'servings',
        'level',
        'photo',
        'description'
    ];

    public const LEVELS = ['easily', 'moderately', 'difficultly'];

    public function cuisine() {
        return $this->belongsTo(Cuisine::class, 'cuisine_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'recipe_tags', 'recipe_id', 'tag_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'recipe_categories', 'recipe_id', 'category_id');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class, 'recipe_id', 'id');
    }

    public static function getLevels(): array
    {
        return [
            self::LEVELS[0] => 'Easily',
            self::LEVELS[1] => 'Moderately',
            self::LEVELS[2] => 'Difficultly'
        ];
    }

    public function getPhoto(): string
    {
        return $this->photo ? 'storage/' . $this->photo : 'storage/users/photo_2022-10-01_23-08-23.jpg';
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/recipes', $data['photo']);
        return $data;
    }
}
