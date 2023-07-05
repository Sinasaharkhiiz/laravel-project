<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Illuminate\Http\Request;


class CoursController extends Controller
{
    function add_course(Request $req)
    {
        $course = new Course;
        $fileName = $req->input('name').rand(100,1000).".pdf";
        $course->price=$req->input('price');
        $course->name=$req->input('name');
        $course->content=$req->file('content')->storeAs('courses',$fileName , 'public');
        $course->description = $req->input('description');
        $course->date= now()->format('Y-m-d');
        #$course->cover = $req->file('cover')->storeAs('covers',$fileName , 'public');
        $course->publisher_id = Auth::user()->id;
        $course->save();
        return redirect('courses');
    }
}
