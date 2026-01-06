<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\countries;
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
        return view('student.create');
    }

    //الدقيقة 10
}
