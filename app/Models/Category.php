<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'parent_id'
    ];

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
