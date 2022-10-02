<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'photo'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function likedUsers() {
        return $this->belongsToMany(User::class, 'post_users', 'post_id', 'user_id');
    }

    public function getPhoto(): string
    {
        return $this->photo ? 'storage/' . $this->photo : 'storage/users/photo_2022-10-01_23-08-23.jpg';
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/posts', $data['photo']);
        return $data;
    }
}
