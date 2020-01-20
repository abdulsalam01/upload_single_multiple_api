<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    public function doUpload(Request $request) {
        $path = public_path('uploads');
        $file = $request->file('fileUpload');

        return $file->move($path, $file->getClientOriginalName());
    }

    public function doUpload2(Request $request) {
        $path = public_path('uploads');
        $files = $request->file('filesUpload');

        foreach($files as $file) {
            $file->move($path, $file->getClientOriginalName());
        }

        return "Ok";
    }
}
