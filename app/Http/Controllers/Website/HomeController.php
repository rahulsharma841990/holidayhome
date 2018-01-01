<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Website Home page method
     * @return [type] view
     */
    public function index(){
        return view('website.home');
    }

    public function about(){
        return view('website.about');
    }

    public function gallery(){
        return view('website.gallery');
    }

    public function rooms(){
        return view('website.rooms');
    }

    public function contact(){
        return view('website.contact');
    }
}
