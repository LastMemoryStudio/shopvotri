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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 255);
            $table->string('image', length: 255);
            $table->string('alias', length: 100);
            $table->text('description');
            $table->text('short_description');
            $table->integer('price');
            $table->integer('price_sale');
            $table->integer('quantity');
            $table->integer('publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
