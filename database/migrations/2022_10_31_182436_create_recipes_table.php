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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('ingredients');
            $table->string('recipe');

            //bigInteger = 
           // $table->bigInteger('user_id')->unsigned();
            //this relates recipes to the user
           // $table->foreign('user_id')-> references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            //link up comments 
            //link up profile
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
