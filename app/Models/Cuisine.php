<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Cuisine extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'photo'
    ];

    public function getPhoto(): string
    {
        return $this->photo ? 'storage/' . $this->photo : 'assets/admin/img/image-not-found.svg';
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/cuisines', $data['photo']);
        return $data;
    }

    public function recipes() {
        return $this->hasMany(Recipe::class);
    }
}
