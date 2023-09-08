<?php

use App\Models\Category;
use App\Models\Language;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->json('title')->nullable();
            $table->unsignedTinyInteger('sort')->default(1);
            $table->boolean('show')->default(0);
            $table->timestamps();
        });

        Category::insert([
            'id' => 1,
            'name' => 'Page',
            'slug' => 'page',
            'title' => json_encode(['1' => ['title' => 'Page']])
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
