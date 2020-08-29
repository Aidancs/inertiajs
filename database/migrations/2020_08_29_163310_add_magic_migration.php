<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagicMigration extends Migration
{
    public function up()
    {
        Schema::create('magic', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('casting_roll');
            $table->integer('unit_id');

            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
        });
    }
}
