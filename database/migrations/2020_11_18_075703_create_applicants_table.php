<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('upload_dir')->nullable();
            $table->string('name')->nullable();
            $table->string('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('blood_type')->nullable();
            $table->text('hobby')->nullable();
            $table->text('favorite_subject')->nullable();
            $table->tinyInteger('favorite_language')->nullable();
            $table->string('cooking')->nullable();
            $table->string('group_life_experience')->nullable();
            $table->string('eye_sight_left')->nullable();
            $table->string('eye_sight_right')->nullable();
            $table->string('color_blindness')->nullable();
            $table->string('tattoo')->nullable();
            $table->string('drinking')->nullable();
            $table->string('smoking')->nullable();
            $table->string('medical_history')->nullable();
            $table->text('medical_history_text')->nullable();
            $table->string('gpa')->nullable();
             $table->string('roll_number')->nullable();
            $table->date('jhs_period_from')->nullable();
            $table->date('jhs_period_to')->nullable();
            $table->text('jhs_school_name')->nullable();
            $table->tinyInteger('jhs_status')->nullable();
            $table->date('hs_period_from')->nullable();
            $table->date('hs_period_to')->nullable();
            $table->text('hs_school_name')->nullable();
            $table->text('hs_faculty_department')->nullable();
            $table->tinyInteger('hs_status')->nullable();
            $table->string('hs_document')->nullable();
            $table->date('univ_period_from')->nullable();
            $table->date('univ_period_to')->nullable();
            $table->text('univ_school_name')->nullable();
            $table->text('univ_faculty_department')->nullable();
            $table->tinyInteger('univ_status')->nullable();
            $table->tinyInteger('univ_school_year')->nullable();
            $table->string('univ_document')->nullable();
            $table->text('question_happiest_event')->nullable();
            $table->text('question_hardest_event')->nullable();
            $table->text('question_worked_hard')->nullable();
            $table->text('question_outside_of_school')->nullable();
            $table->text('question_future_workplace')->nullable();
            $table->text('question_poor_person')->nullable();
            $table->text('question_emphasis')->nullable();
            $table->text('question_weak')->nullable();
            $table->text('question_speciality')->nullable();
            $table->text('question_it_technology')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('applicants');
    }
}
