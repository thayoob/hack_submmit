<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('email');
            $table->string('current_grades');
            $table->text('previous_records');
            $table->string('standardized_tests');
            $table->text('extracurricular_activities')->nullable();
            $table->text('special_skills')->nullable();
            $table->text('access_to_technology')->nullable();
            $table->text('digital_literacy')->nullable();
            $table->text('career_interests')->nullable();
            $table->text('higher_education_plans')->nullable();
            $table->string('interests')->nullable();
            $table->string('aptitude_question_1')->nullable();
            $table->string('aptitude_question_2')->nullable();
            $table->string('aptitude_question_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
