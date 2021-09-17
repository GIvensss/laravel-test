<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false)->unique();
            $table->string('password', 255)->nullable(false)->unique();
            $table->unsignedBigInteger('games_id')->nullable(true);
            $table->foreign('games_id')->references('id')->on('games');
            $table->string('remember_token', 255)->nullable(true);
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
}
