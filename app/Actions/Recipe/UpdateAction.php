<?php

namespace App\Actions\Recipe;

use App\Models\Recipe;
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
