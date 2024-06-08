<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string|in:male,female,other,prefer_not_to_say',
            'email' => 'required|email|max:255',
            'current_grades' => 'nullable|string|max:255',
            'previous_records' => 'nullable|string',
            'standardized_tests' => 'nullable|string|max:255',
            'extracurricular_activities' => 'nullable|string',
            'special_skills' => 'nullable|string',
            'access_to_technology' => 'nullable|string',
            'digital_literacy' => 'nullable|string',
            'career_interests' => 'nullable|string',
            'higher_education_plans' => 'nullable|string',
            'interests' => 'nullable|string|in:art,medical,business,engineering',
            'aptitude_question_1' => 'nullable|string|in:4,3,5,2',
            'aptitude_question_2' => 'nullable|string|in:24,30,36,40',
            'aptitude_question_3' => 'nullable|string|in:3,4,5,6',
        ];
    }
}
