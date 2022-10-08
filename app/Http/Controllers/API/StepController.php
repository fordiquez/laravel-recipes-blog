<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Step\StoreRequest;
use App\Http\Resources\StepResource;
use App\Models\Step;

class StepController extends Controller
{
    public function store(StoreRequest $request) {
        $data = $request->validated();
        Step::create(Step::setPhoto($data));

        return back();
    }

    public function destroy(Step $step) {
        $step->delete();

        return new StepResource($step);
    }

    public function show(Step $step) {
        return new StepResource($step);
    }
}
