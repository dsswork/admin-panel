<?php

use App\Models\Menu;
use App\Models\Template;
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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->json('options')->nullable();
            $table->string('type')->default('header')->nullable();
            $table->unsignedTinyInteger('sort')->default(1);
            $table->boolean('show')->default(0);
            $table->foreignIdFor(Template::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Menu::class)->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('menus');
    }
};
