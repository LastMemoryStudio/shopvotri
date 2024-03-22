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
        Schema::create('tbl_trademarks', function (Blueprint $table) {
            $table->id();
            $table->string('alias');
            $table->string('name');
            $table->text('image')->nullable();
            $table->text('des')->nullable();
            $table->integer('sort')->nullable();
            $table->integer('publish')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_trademarks');
    }
};
