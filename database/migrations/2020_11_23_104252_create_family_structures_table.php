<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_structures', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('applicant_id');
            $table->string('name');
            $table->string('relationship');
            $table->tinyInteger('age');
            $table->text('job');
            $table->string('live_together');
            $table->string('agreement');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('applicant_id')->references('id')->on('applicants')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_structures');
    }
}
