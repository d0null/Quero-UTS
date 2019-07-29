<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('publication_research_line', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('research_line_id');
            $table->unsignedBigInteger('publication_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_lines');
        Schema::dropIfExists('publication_research_line');
    }
}
