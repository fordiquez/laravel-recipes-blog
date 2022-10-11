<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'photo',
        'parent_id'
    ];

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function subcategories() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function recipes() {
        return $this->belongsToMany(Recipe::class);
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/categories', $data['photo']);
        return $data;
    }

    public function getPhoto(): string
    {
        return $this->photo ? 'storage/' . $this->photo : 'assets/admin/img/image-not-found.svg';
    }
}
