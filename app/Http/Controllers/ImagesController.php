<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Image;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function imageUpload()
    {
        return view('imageUpload');
    }

    public function imageUploadPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($validator->passes()) {

            $input = $request->all();
            $input['image'] = Storage::putFile('images', $request->image);
            Image::create($input);

            return view('imageUpload');
        }

        return view('imageUpload')->withErrors($validator->errors()->all());
    }
}
