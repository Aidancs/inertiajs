<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMeleeWeaponsMigration extends Migration
{
    public function up()
    {
        Schema::create('melee_weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('range');
            $table->integer('attacks');
            $table->integer('to_hit');
            $table->integer('to_wound');
            $table->integer('rend');
            $table->integer('damage');
            $table->boolean('equipped');
            $table->integer('unit_id');
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
        });
    }
}
