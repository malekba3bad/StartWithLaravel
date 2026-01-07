<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\countries;
use App\Http\Requests\CreateStudentRequest;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $data = Students::all();
        if(!empty($data)){
            foreach($data as $info){
$info->country_name=countries::where('id','=',$info->country_id)->value('name');
            }
        }
        return view('students.index', compact('data'));
    }

    public function create()
    {
        $countries = countries::select('id', 'name')->where('active', 1)->get();
        return view('students.create', ['countries' => $countries]);
    }

     public function store(CreateStudentRequest $request){
        $counter= Students::where('name', '=',$request->name)->count();
        
        if($counter>0){
            return redirect()->back()->with('error','الكورس موجود بالفعل')->withInput();
        }

$student = new Students();
        $student->name = $request->name;
        $student->country_id = $request->country_id;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->nationalID = $request->nationalID;
        $student->image = $request->image;
        $student->address = $request->address;
        $student->notes = $request->notes;
        $student->active = $request->active;
        $student->save();
       
        return redirect()->route('student.index')->with('success','تم الإضافة بنجاح');
    }
}
