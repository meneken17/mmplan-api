<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodiObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godi_objects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('internal');
            $table->string('display');
            $table->foreignId('location_id')->constrained();
            $table->smallInteger('duration');
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('godi_objects');
    }
}
