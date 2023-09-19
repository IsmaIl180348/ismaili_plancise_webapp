<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function addCourse(Request $request){
           $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'lecturer_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return ['error', "All input fields need to be filled!"];
        }

        Course::create($request->all());
    

        return ['success', "Course added!"];
    }
    
    public function addStudent(Request $request){
     $validator = Validator::make($request->all(), [
            'student_id' => ['required'],
            'course_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return ['error', "All input fields need to be filled!"];
        }

        CourseStudent::create($request->all());

        return ['success', "Student added to course!"]
    }
}
