<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommandAbilitiesMigration extends Migration
{
    public function up()
    {
        Schema::create('command_abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('roll');
            $table->integer('unit_id');
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
        });
    }
}
