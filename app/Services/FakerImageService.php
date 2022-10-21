<?php

namespace App\Services;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class FakerImageService extends Base
{
    public function loremflickr(string $dir = '', string $name = ''): string
    {
        $width = $dir === 'users' ? 500 : 1280;
        $height = $dir === 'users' ? 500 : 720;
        $filename = !empty($name) ? $name : Str::random(8);
        $path = $dir . '/' . $filename . '.jpg';
        $imageURL = "https://loremflickr.com/$width/$height";

        Storage::disk('public')->put($path, file_get_contents($imageURL));

        return $path;
    }
}
