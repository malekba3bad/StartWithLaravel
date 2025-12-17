<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
