<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //homepage
    public function index()
    {
        return view('static-page.index');
    }
    // privacy
    public function privacy()
    {
        return view('static-page.privacy');
    }
    //faq
    public function faq()
    {
        return view('static-page.faq');
    }
}
