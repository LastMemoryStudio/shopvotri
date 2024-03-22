<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Schema::table('tbl_slide', function (Blueprint $table) {
        //     $table->integer('type')->after('name')->default(1);
        // });
    }

    public function down()
    {
        Schema::table('tbl_slide', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
