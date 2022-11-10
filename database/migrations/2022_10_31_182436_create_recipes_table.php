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
            $table->string('title');
            $table->string('ingredients');
            $table->string('recipe');
          //  $table->string('recipe_id');//->whereRaw('recipe_id', '=', 'id');
            //->references('id')->on('recipes');
        

            //bigInteger = primary key to user
            $table->unsignedBigInteger('user_id');
            //this relates recipes to the user via the key id
            $table->foreign('user_id')-> references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
