<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;


class StudentController extends Controller
{
     public function index(){
        $data= Students::all();
        return view('student.index',compact('data'));
    }

    public function create(){
        return view('student.create');
    }

   //الدقيقة 10
}
