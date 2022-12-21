<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Series;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       $series =Series::take(6)->get();
       $courses =Course::take(6)->get();
        return view('welcome',[
            'series'=>$series,
            'course'=>$courses,
        ]);
    }
}
