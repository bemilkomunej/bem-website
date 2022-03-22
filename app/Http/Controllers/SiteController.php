<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Blog;
use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        // return view('pages.landing.menu.index');
        return view('pages.landing2.menu.index', ["blogs" => Blog::latest()->limit(3)->get()]);
    }

    public function about() {
        $member = Member::all();

        return view('pages.landing.menu.about', compact('member'));
    }

    public function blog() {
        // return view('pages.landing.menu.blog', ["data" => Blog::where('status', 'Published')->latest()->paginate(7)]);
        return view('pages.landing2.menu.blog', ["blogs" => Blog::where('status', 'Published')->latest()->paginate(8)]);
    }
    
    public function article(Blog $blog){
        // return view('pages.landing.menu.single-blog', ["data" => $blog]);
        return view('pages.landing2.menu.single-blog', [
            "blog" => $blog,
            "blogs" => Blog::where('status', 'Published')->latest()->limit(5)->get()
        ]);
    }

    // public function singleBlog() {
    //     return view('pages.landing.menu.single-blog');
    // }

    public function contact() {
        return view('pages.landing.menu.contact');
    }

    public function pointDetail($id) {
        $detail = Student::findOrFail($id);
        $p_detail = StudentDetail::whereStudentId($id)->get();
//        dd($p_detail);

        return view('pages.landing.menu.point-detail', compact('detail', 'p_detail'));
    }
}
