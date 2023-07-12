<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about() {
        return view('about', [
            "title" => "About",
            "active" => 'about',
            "name" => "Rico Tokanto",
            "email" => "ricotokan155@gmail.com",
            "image" => "rico.jpg"
        ]);
    }
}
