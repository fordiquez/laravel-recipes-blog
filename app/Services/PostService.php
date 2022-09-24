<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data): void
    {
        try {
            Db::beginTransaction();
            if (isset($data['tag_ids'])) {
                $tagIDs = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (isset($data['preview_image'])) $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            if (isset($data['main_image'])) $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::create($data);
            if (isset($tagIDs)) $post->tags()->attach($tagIDs);
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tag_ids'])) {
                $tagIDs = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (isset($data['preview_image'])) $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            if (isset($data['main_image'])) $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post->updateOrFail($data);
            !empty($tagIDs) ? $post->tags()->sync($tagIDs) : $post->tags()->detach();
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }

        return $post;
    }
}
