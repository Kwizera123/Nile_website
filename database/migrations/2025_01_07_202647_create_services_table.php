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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtile')->nullable();
            $table->text('details')->nullable();
            $table->string('Contact_link')->nullable();
            $table->string('Vegetable')->nullable();
            $table->string('Vegetabler_d')->nullable();
            $table->string('Fruit')->nullable();
            $table->string('Fruit_d')->nullable();
            $table->string('healty')->nullable();
            $table->string('healty_d')->nullable();
            $table->string('Modern')->nullable();
            $table->string('Modern_d')->nullable();
            $table->string('Farmang')->nullable();
            $table->string('farming_d')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
