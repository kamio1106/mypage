<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diaries', function (Blueprint $table) {
            $table->string('title');
        });
    }

    public function down()
    {
        Schema::table('diaries', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
}
