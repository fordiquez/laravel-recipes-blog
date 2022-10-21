<?php

namespace App\Models;

use App\Traits\Filterable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Recipe extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'title',
        'slug',
        'cuisine_id',
        'user_id',
        'cooking_time',
        'servings',
        'level',
        'photo',
        'description',
        'published'
    ];

    protected $withCount = ['likes'];

    public const LEVELS = ['easily', 'moderately', 'difficultly'];

    public function cuisine(): BelongsTo
    {
        return $this->belongsTo(Cuisine::class, 'cuisine_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'recipe_user', 'recipe_id', 'user_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_recipe', 'recipe_id', 'category_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'recipe_tag', 'recipe_id', 'tag_id');
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'recipe_id', 'id');
    }

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class, 'recipe_id', 'id');
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
        return $this->photo ? 'storage/' . $this->photo : 'assets/admin/img/image-not-found.svg';
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/recipes', $data['photo']);
        return $data;
    }

    public function getLevelStarClass(): string
    {
        return $this->level == self::LEVELS[0] ? 'fa-regular fa-star' : ($this->level == self::LEVELS[1] ? 'fa-regular fa-star-half-stroke' : 'fa-solid fa-star');
    }

    public function getCreatedAtDate(): string
    {
        $date = Carbon::parse($this->created_at);

        return $date->format('F d, Y');
    }

    public function isLikedRecipe(): string
    {
        return auth()->user()->likes->contains($this->id) ? 'fa-solid' : 'fa-regular';
    }
}
