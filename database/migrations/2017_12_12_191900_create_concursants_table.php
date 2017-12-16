<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcursantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concursants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('number')->unique();
            $table->boolean('checked')->default(false);
            $table->integer('prize_id')->unsigned()->unique()->nullable();            
            $table->timestamps();

            $table->foreign('prize_id')->references('id')->on('prizes');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concursants');
    }
}
