<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'age',
        'gender',
        'email',
        'current_grades',
        'previous_records',
        'standardized_tests',
        'extracurricular_activities',
        'special_skills',
        'access_to_technology',
        'digital_literacy',
        'career_interests',
        'higher_education_plans',
        'interests',
        'aptitude_question_1',
        'aptitude_question_2',
        'aptitude_question_3',
    ];
}
