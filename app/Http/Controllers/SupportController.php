<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class SupportController extends Controller
{
    public function upload(Request $request){
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = md5(rand()). '.' . $image->getClientOriginalExtension();
            
            // $image=Image::make($image->getRealPath());
            // $image->resize(200, 200, function ($constraint) {
            //     $constraint->aspectRatio();
            // });
            $image->storeAs('public/img/summernote-image/', $filename);
            // $image->stream();
            // return 'img/summernote-image-1/';
        // $a=Storage::disk('local')->put('public/img/summernote-image/' . $filename, $image, 'public');
        return 'img/summernote-image/' . $filename;
    }
    }
}
