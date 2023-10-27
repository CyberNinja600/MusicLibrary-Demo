<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MusicUploadController extends Controller
{
    public function uploadSong(Request $request)
    {   
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:mp3,wav,wma,ogg|max:10000',// Allow only MP3 files with a maximum size of 10MB
        ]);

        // Store the uploaded file in the storage folder
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('songs', $fileName, 'public');

        // Return a response, you can modify this as needed
        return response()->json(['message' => $fileName]);
    }
}
