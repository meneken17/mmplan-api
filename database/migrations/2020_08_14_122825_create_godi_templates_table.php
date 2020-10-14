<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodiTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godi_templates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('internal');
            $table->string('display');
            $table->foreignId('location_id')->nullable()->constrained();
            $table->smallInteger('duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('godi_templates');
    }
}
