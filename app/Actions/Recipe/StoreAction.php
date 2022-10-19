<?php

namespace App\Actions\Recipe;

use App\Models\Recipe;
use App\Models\Step;
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

            if (isset($data['ingredients'])) {
                $ingredients = $data['ingredients'];
                unset($data['ingredients']);
            }

            if (isset($data['steps'])) {
                $steps = Step::setPhoto($data['steps'], true);
                unset($data['steps']);
            }

            $recipe = Recipe::create(Recipe::setPhoto($data));
            if (isset($categories)) $recipe->categories()->attach($categories);
            if (isset($tags)) $recipe->tags()->attach($tags);
            if (isset($ingredients)) $recipe->ingredients()->createMany($ingredients);
            if (isset($steps)) $recipe->steps()->createMany($steps);
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }
    }
}
