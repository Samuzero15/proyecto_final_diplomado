<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('web.pages.about'); 
    }

    public function mens()
    {
        return view('web.pages.mens'); 
    }

    public function womens()
    {
        return view('web.pages.womens'); 
    }

    public function contact()
    {
        return view('web.pages.contact'); 
    }

    public function icons()
    {
        return view('web.pages.icons'); 
    }

    public function typography()
    {
        return view('web.pages.typography'); 
    }

    public function single()
    {
        return view('web.pages.single'); 
    } 

}
