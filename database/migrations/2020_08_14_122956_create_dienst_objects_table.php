<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDienstObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dienst_objects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('internal');
            $table->string('display');
            $table->tinyInteger('size');
            $table->tinyInteger('pos');
            $table->foreignId('godi_object_id')->constrained()->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dienst_objects');
    }
}
