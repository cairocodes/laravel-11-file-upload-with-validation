<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('fileupload');
    }

    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,txt,json,xls,jpg,png|max:2048',
        ]);

        $path = $request->file('file')->store('public/files');

        return redirect('file-upload')->with('status', 'File Has been uploaded successfully ' . $path . ' ');
    }
}
