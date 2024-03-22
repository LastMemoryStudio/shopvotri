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
        Schema::create('tbl_slide', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image')->nullable();
            $table->text('alias')->nullable();
            $table->text('webp')->nullable();
            $table->integer('hot')->nullable()->default(1);
            $table->integer('type')->nullable()->default(1);
            $table->integer('home')->nullable()->default(1);
            $table->integer('sort')->nullable()->default(1);
            $table->integer('publish')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_slide');
    }
};
