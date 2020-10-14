<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatePartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_parts', function (Blueprint $table) {
            $table->foreignId('godi_template_id');
            $table->foreignId('dienst_template_id');
            $table->primary(['godi_template_id', 'dienst_template_id'], 'template_parts_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_parts');
    }
}
