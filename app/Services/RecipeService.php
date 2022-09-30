<?php

namespace App\Services;

use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecipeService
{
    public function store($data): void
    {
        try {
            Db::beginTransaction();
            if (isset($data['categories'])) {
                $categories = $data['categories'];
                unset($data['categories']);
            }

            if (isset($data['tags'])) {
                $tags = $data['tags'];
                unset($data['tags']);
            }

            $recipe = Recipe::create(Recipe::setPhoto($data));
            if (isset($categories)) $recipe->categories()->attach($categories);
            if (isset($tags)) $recipe->tags()->attach($tags);
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $recipe)
    {
        try {
            Db::beginTransaction();
            if (isset($data['categories'])) {
                $categories = $data['categories'];
                unset($data['categories']);
            }

            if (isset($data['tags'])) {
                $tags = $data['tags'];
                unset($data['tags']);
            }

            $recipe->updateOrFail(isset($data['photo']) ? Recipe::setPhoto($data) : $data);
            !empty($categories) ? $recipe->categories()->sync($categories) : $recipe->categories()->detach();
            !empty($tags) ? $recipe->tags()->sync($tags) : $recipe->tags()->detach();
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }

        return $recipe;
    }
}
