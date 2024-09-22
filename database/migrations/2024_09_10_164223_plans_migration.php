<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function(Blueprint $table){
            $table->increments('id');
            $table->string('model',100);
            $table->string('name',100);
            $table->string('type',100);
            $table->integer('pages');
            $table->integer('id_zone')->unsigned();
            $table->integer('id_user')->unsigned();

            $table->foreign('id_zone')->references('id')->on('zones');
            $table->foreign('id_user')->references('id')->on('users');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
