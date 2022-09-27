<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug')->unique();
            $table->foreignId('cuisine_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('preparation_time');
            $table->float('servings')->default(1);
            $table->set('level', ['easily', 'moderately', 'difficultly']);
            $table->string('photo');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
