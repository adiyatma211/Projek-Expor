<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // basebladde
    public function base()
    {
        return view('layout.base');
    }
    // end

    // homepage

    public function home()
    {
        return view('homepage.home');
    }
    public function product()
    {
        return view('homepage.product');
    }
    public function about()
    {
        return view('homepage.about');
    }
    public function contact()
    {
        return view('homepage.contact');
    }
    public function team()
    {
        return view('homepage.team');
    }



}
