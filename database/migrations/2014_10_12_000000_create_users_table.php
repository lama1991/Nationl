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
            $table->string('uuid')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('role');
<<<<<<< HEAD
            $table->string('fcm_token');
           $table->rememberToken();
=======
            $table->string('fcm-token');
            $table->rememberToken();
>>>>>>> fa3b9f849d04e2fbba0f7ddec880d04347a9985c
            $table->timestamps();
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
