<?php

namespace App\Faker;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class FakerImageProvider extends Base
{
    public function loremflickr(string $dir = '', string $name = '', int $width = 500, int $height = 500): string
    {
        $filename = !empty($name) ? $name : Str::random(8);
        $path = $dir . '/' . $filename . '.jpg';
        $imageURL = "https://loremflickr.com/$width/$height";

        Storage::disk('public')->put($path, file_get_contents($imageURL));

        return $path;
    }
}
