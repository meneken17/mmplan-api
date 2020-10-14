<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodiSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godi_series', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('internal');
            $table->string('display');
            $table->foreignId('godi_template_id')->constrained()->onDelete('cascade');
            $table->string('rrule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('godi_series');
    }
}
