<?php

namespace App\Http\Controllers\User;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentsFormRequest;
use Charts;



class UserController extends Controller
{
    public function index()
    {
        return view('frontend.homePage');
    }
    public function userData()
    {
        return view('frontend.form');
    }
    public function userDataStore(StudentsFormRequest $request)
    {
        try {
            Student::create($request->validated());
            return redirect('analytics')->with('success', 'Student data saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to save student data. Please try again.');
        }
    }

    public function userDataAnalytics()
    {
        $student = Student::latest()->first();

        return view('frontend.analytics', compact('student'));
    }

    public function userDataCourse()
    {
        return view('frontend.Course');
    }
}
