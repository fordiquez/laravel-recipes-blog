<?php

namespace App\Actions\Recipe;

use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Support\Facades\DB;

class UpdateAction {
    public function handle($data, $recipe)
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
                $savedIngredients = [];
                foreach ($ingredients as $key => $ingredient) {
                    isset($ingredient['id']) ? $savedIngredients[] = $ingredient['id'] : $ingredients[$key]['id'] = null;
                    $ingredients[$key]['recipe_id'] = $recipe->id;
                }
                unset($data['ingredients']);
            }

            if (isset($data['steps'])) {
                $steps = Step::setPhoto($data['steps'], true);
                $savedSteps = [];
                foreach ($steps as $key => $step) {
                    isset($step['id']) ? $savedSteps[] = $step['id'] : $steps[$key]['id'] = null;
                    $steps[$key]['recipe_id'] = $recipe->id;
                    if (!isset($step['photo'])) $steps[$key]['photo'] = isset($step['id']) ? Step::find($step['id'])->value('photo') : null;
                }
                unset($data['steps']);
            }

            $recipe->updateOrFail(isset($data['photo']) ? Recipe::setPhoto($data) : $data);
            !empty($categories) ? $recipe->categories()->sync($categories) : $recipe->categories()->detach();
            !empty($tags) ? $recipe->tags()->sync($tags) : $recipe->tags()->detach();
            if (isset($ingredients) && isset($savedIngredients)) {
                $recipe->ingredients()->whereNotIn('id', $savedIngredients)->delete();
                $recipe->ingredients()->upsert($ingredients, ['id', 'recipe_id', 'title'], ['title']);
            }
            if (isset($steps) && isset($savedSteps)) {
                $recipe->steps()->whereNotIn('id', $savedSteps)->delete();
                $recipe->steps()->upsert($steps, ['id', 'recipe_id', 'step'], ['description', 'photo']);
            }
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }

        return $recipe;
    }
}
