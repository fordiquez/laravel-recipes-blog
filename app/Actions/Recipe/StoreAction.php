<?php

namespace App\Actions\Recipe;

use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class StoreAction {
    public function handle(array $data): void
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
}
