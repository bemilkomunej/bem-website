<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('pages.landing.menu.index');
    }

    public function about() {
        return view('pages.landing.menu.about');
    }

    public function blog() {
        return view('pages.landing.menu.blog');
    }

    public function singleBlog() {
        return view('pages.landing.menu.single-blog');
    }

    public function contact() {
        return view('pages.landing.menu.contact');
    }
}
