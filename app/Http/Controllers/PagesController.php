<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Laravel';
        //return view('pages.index', compact('title'));
        //Able to Hand Over Multiple Values
        return view('posts.index')->with('title', $title);
    }

    public function about()
    {
        $title = "About My Laravel App";
        return view('posts.about')->with("title", $title);
    }

    public function services()
    {
        // Array in PHP can be an object in JS
        $data = array(
            'title' => 'Services',
            'services' => [
                'Web Design', "Programming", "Database"
            ]
        );
        return view('posts.services')->with($data);
    }
}
