<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCourseValidationRequest;
use App\Models\Courses;
class CoursesController extends Controller
{
    // public function index(){
    //     $data= Courses::all();
    //     return view('courses.index');
    // }
    public function index(){
        $data= Courses::all();
        return view('courses.index',compact('data'));
    }

    public function create(){
        return view('courses.create');
    }

    public function store(CreateCourseValidationRequest $request){
        $counter= Courses::where('name', '=',$request->name)->count();
        
        if($counter>0){
            return redirect()->back()->with('error','الكورس موجود بالفعل')->withInput();
        }
        
        $data= $request->all();
        Courses::create($data);
        return redirect()->route('courses.index')->with('success','تم الإضافة بنجاح');
    }
}
