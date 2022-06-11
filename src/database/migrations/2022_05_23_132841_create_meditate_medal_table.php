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
        Schema::create('meditate_medal', function (Blueprint $table) {
            $table->increments('meditate_medal_id')->comment('瞑想メダルID');
            $table->string('meditate_medal_name')->comment('瞑想メダル名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meditate_medal');
    }
};
