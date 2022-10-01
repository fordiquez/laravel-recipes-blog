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

    public function getPhoto($cuisine): string
    {
        return $cuisine->photo ? 'storage/' . $cuisine->photo : 'storage/users/photo_2022-10-01_23-08-23.jpg';
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/cuisines', $data['photo']);
        return $data;
    }
}
