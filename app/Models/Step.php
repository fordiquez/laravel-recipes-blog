<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'step',
        'description',
        'photo'
    ];

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/steps', $data['photo']);
        return $data;
    }

    public function getPhoto(): string
    {
        return $this->photo ? 'storage/' . $this->photo : 'assets/admin/img/image-not-found.svg';
    }
}
