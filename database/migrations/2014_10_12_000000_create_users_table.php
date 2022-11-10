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
    

        Schema::create('users', function (Blueprint $table) {
            $table->id();
           // $table->string('user_id');//->whereRaw('user_id', '=', 'id');
            
            $table->timestamps();                                   // date and time account was created
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();     // has verified email or not, and if yes - when?
            $table->rememberToken();                                //remembers user data so they can move through the website easier

        //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
