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

    public static function setPhoto(array $data, bool $saveMany = false): array
    {
        if ($saveMany) {
            foreach ($data as $key => $step) {
                if (isset($step['photo'])) $data[$key]['photo'] = Storage::disk('public')->put('/steps', $step['photo']);
            }
        } else {
            if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/steps', $data['photo']);
        }
        return $data;
    }

    public function getPhoto(): bool|string
    {
        return $this->photo ? "storage/$this->photo" : false;
    }
}
