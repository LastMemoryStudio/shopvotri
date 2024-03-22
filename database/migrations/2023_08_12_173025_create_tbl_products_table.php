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
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('cateid')->nullable()->default(1);
            $table->unsignedBigInteger('trademarkid')->nullable()->default(1);
            $table->string('type')->nullable();
            $table->string('alias')->nullable();
            $table->string('image')->nullable();
            $table->string('thumb')->nullable();
            $table->longText('des')->nullable();
            $table->text('content')->nullable();
            $table->text('properity')->nullable();
            $table->unsignedInteger('qty')->nullable()->default(1);
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('price_sale')->nullable();
            $table->unsignedTinyInteger('status')->nullable()->default(1);
            $table->unsignedTinyInteger('hot')->nullable()->default(1);
            $table->unsignedSmallInteger('sort')->nullable()->default(1);
            $table->unsignedTinyInteger('publish')->nullable()->default(1);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_products');
    }
};
