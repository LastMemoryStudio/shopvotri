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
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->id();
            $table->integer('parentid')->nullable();
            $table->string('name');
            $table->text('des')->nullable();
            $table->integer('home');
            $table->integer('publish');
            $table->integer('sort');
            $table->string('alias');
            $table->string('image');
            $table->string('thumb');
            $table->string('webp');
            $table->string('webp_thumb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_category');
    }
};
