<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MusicUploadController extends Controller
{
    public function uploadSong(Request $request)
    {   
        // Validate the uploaded file
        $request->validate([
            'file' => 'required', // Allow only MP3 files with a maximum size of 10MB
        ]);

        // Store the uploaded file in the storage folder
        $file = $request->file('file');
        $path = $file->store('uploads', 'local');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('songs', $fileName, 'public');

        // Return a response, you can modify this as needed
        return response()->json(['message' => 'File uploaded successfully']);
    }
}
