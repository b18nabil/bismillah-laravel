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
        Schema::create('signup', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->required();
            $table->string('name', 100)->required();
            $table->string('email', 50)->required();
            $table->string('password', 50)->required();
            $table->string('confirm_password', 50)->required();
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
        Schema::dropIfExists('signup');
    }
};
