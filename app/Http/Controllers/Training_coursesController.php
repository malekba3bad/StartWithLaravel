<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\training_courses;
use App\Http\Requests\CreateTraingCourse;
use App\Models\Training_courses as ModelsTraining_courses;

class Training_coursesController extends Controller
{
     public function index()
    {
        $data = training_courses::all();
        if(!empty($data)){
            foreach($data as $info){
$info->course_name=Courses::where('id','=',$info->courseID)->value('name');
            }
        }
        return view('training_courses.index', compact('data'));
    }

    public function create()
    {
        $Courses = Courses::select('id', 'name')->where('active', 1)->get();
        return view('training_courses.create', ['Courses' => $Courses]);
    }

     public function store(CreateTraingCourse $request){
       
$student = new Training_courses();
        $student->courseID = $request->courseID;
        $student->price = $request->price;
        $student->start_date = $request->start_date;
        $student->end_date = $request->end_date;
        $student->notes = $request->notes;
        $student->save();
       
        return redirect()->route('training_courses.index')->with('success','تم الإضافة بنجاح');
    }
}
