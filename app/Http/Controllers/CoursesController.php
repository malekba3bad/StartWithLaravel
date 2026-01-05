<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCourseValidationRequest;
use App\Models\Courses;
class CoursesController extends Controller
{
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

    public function edit($id){
        $data= Courses::find($id);
        if(empty($data)){
            return redirect()->route('courses.index')->with('error','الكورس غير موجود');
        }
        return view('courses.edit',compact('data'));
    }

    public function update(CreateCourseValidationRequest $request,$id){
        $data= Courses::find($id);
        if(empty($data)){
            return redirect()->route('courses.index')->with('error','الكورس غير موجود');
        }
        $data->update($request->all());
        return redirect()->route('courses.index')->with('success','تم التحديث بنجاح');
    }

    public function destroy($id){
        $data= Courses::find($id);
        if(empty($data)){
            return redirect()->route('courses.index')->with('error','الكورس غير موجود');
        }
        $data->delete();
        return redirect()->route('courses.index')->with('success','تم الحذف بنجاح');
    }
}
