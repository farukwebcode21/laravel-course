<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index($slug){
        $topic =Topic::where('slug', $slug)->with('courses')->first();
        // for json data view purpose use this comment
        // return $topic;
        return view('topic.single',[
            'topic'=>$topic
        ]);
    }
}
