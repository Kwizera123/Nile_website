<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('right_banners', function (Blueprint $table) {
            $table->id();
            $table->string('title_article_two')->nullable();
            $table->text('details_article_two')->nullable();
            $table->string('readmore_article_two')->nullable();
            $table->string('image_two')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('right_banners');
    }
};
