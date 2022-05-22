<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        // return view('pages.landing.menu.index');
        return view('pages.landing2.menu.index', ["blogs" => Blog::latest()->limit(3)->get()]);
    }

    public function kabinet() {
        // $member = Member::all();

        // return view('pages.landing.menu.about', compact('member'));
        return view('pages.landing2.menu.kabinet', ["members" => Member::all()]);
    }

    public function blog() {
        // return view('pages.landing.menu.blog', ["data" => Blog::where('status', 'Published')->latest()->paginate(7)]);
        return view('pages.landing2.menu.blog', ["blogs" => Blog::where('status', 'Published')->latest()->filter(request(['author','search','category']))->paginate(3)->withQueryString(),
        "recents" => Blog::where('status', 'Published')->latest()->limit(5)->get(),
        "categories" => Tag::get()
    ]);
    }
    
    public function article(Blog $blog){
        // return view('pages.landing.menu.single-blog', ["data" => $blog]);
        return view('pages.landing2.menu.single-blog', [
            "blog" => $blog,
            "blogs" => Blog::where('status', 'Published')->latest()->limit(5)->get(),
            "categories" => Tag::get()
        ]);
    }

    public function ppmb() {
        // return view('pages.landing.menu.contact');
        return view('pages.landing2.menu.ppmb', ['detail' => NULL, 
        'p_detail' => NULL]);
    }

    public function profil() {
        // return view('pages.landing.menu.contact');
        return view('pages.landing2.menu.profil');
    }

    public function pointDetail(Student $student) {
        // $detail = Student::findOrFail($id);
        $p_detail = StudentDetail::whereStudentId($student->id)->get();

        // return view('pages.landing.menu.point-detail', ['detail' => $student, 
        // 'p_detail' => $p_detail]);
        return view('pages.landing2.menu.ppmb', ['detail' => $student, 
        'p_detail' => $p_detail]);
    }

    // Kementerian
    public function kominfo(){
        return view('pages.landing2.minister.kominfo',  ["members" => Member::where('division', 'KOMINFO')->get()]);
    }
    public function rumahtangga(){
        return view('pages.landing2.minister.rumahtangga',  ["members" => Member::where('division', 'RUMAHTANGGA')->get()]);
    }
    public function luardalam(){
        return view('pages.landing2.minister.luardalam',  ["members" => Member::where('division', 'LUARDALAM')->get()]);
    }
    public function psdm(){
        return view('pages.landing2.minister.psdm',  ["members" => Member::where('division', 'PSDM')->get()]);
    }
    public function perekonomian(){
        return view('pages.landing2.minister.perekonomian',  ["members" => Member::where('division', 'PEREKONOMIAN')->get()]);
    }
    public function adkesma(){
        return view('pages.landing2.minister.adkesma',  ["members" => Member::where('division', 'ADKESMA')->get()]);
    }
}
