<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_module', function (Blueprint $table) {
            $table->id();
            $table->integer('parentid')->nullable();
            $table->string('icon')->nullable();
            $table->string('name');
            $table->string('alias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_module');
    }
};
