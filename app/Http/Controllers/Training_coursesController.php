<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\training_courses;

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
}
