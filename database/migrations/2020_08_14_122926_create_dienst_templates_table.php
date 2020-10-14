<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDienstTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dienst_templates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('internal');
            $table->string('display');
            $table->tinyInteger('size');
            $table->smallInteger('sort')->default(-32768);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dienst_templates');
    }
}
