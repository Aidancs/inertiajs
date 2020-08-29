<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnitsMigration extends Migration
{
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('move');
            $table->integer('save');
            $table->integer('wounds');
            $table->integer('bravery');
            $table->boolean('is_alive');
            $table->integer('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }
}
