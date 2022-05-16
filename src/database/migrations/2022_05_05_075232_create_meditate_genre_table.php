<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meditate_genre', function (Blueprint $table) {
            $table->bigIncrements('meditate_genre_id')->comment('瞑想ジャンルID');
            $table->string('meditate_genre_name')->comment('瞑想ジャンル名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meditate_genre');
    }
};
