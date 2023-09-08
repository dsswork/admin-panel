<?php

use App\Models\Category;
use App\Models\Page;
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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->json('meta')->nullable();
            $table->json('main')->nullable();
            $table->unsignedTinyInteger('sort')->default(1);
            $table->boolean('show')->default(0);
            $table->foreignIdFor(Category::class)->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });

        Page::insert([
            'name' => 'Index',
            'slug' => '/',
            'category_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
