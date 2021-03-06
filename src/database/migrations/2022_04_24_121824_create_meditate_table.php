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
        Schema::create('meditate', function (Blueprint $table) {
            $table->increments('meditate_id')->comment('瞑想セッションID');
            $table->time('meditate_time')->comment('瞑想セッション時間');
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meditate');
    }
};
