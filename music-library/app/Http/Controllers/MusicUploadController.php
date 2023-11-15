<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class MusicUploadController extends Controller
{

    public function uploadSongValidation(Request $request){
    
        // Validate the uploaded file
        try {
            $request->validate([
                'file' => 'required|file|mimes:mp3,wav,wma,ogg|max:10000', // Allow only MP3 files with a maximum size of 10MB
            ]);
            
            // If validation passes, return 'successful'
            return response()->json(['message' => 'successful']);
            
        } 
        
        catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, return 'failed'
            return response()->json(['message' => 'failed']);
        }
    }
    


    public function uploadSong(Request $request)
    {
        // Generate a random 10-digit alphanumeric string
        $randomString = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 10)), 0, 10);

        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:mp3,wav,wma,ogg|max:10000000', // Allow only MP3 files with a maximum size of 10MB
        ]);

        // Store the uploaded file in the storage folder with the random string as a prefix
        $file = $request->file('file');
        $fileName = $randomString . '_' . time() . '_' . $file->getClientOriginalName();

        $progressKey = 'upload_progress_' . $fileName;
        Cache::put($progressKey, 0, now()->addMinutes(10)); // Set initial progress


        $file->storeAs('songs', $fileName, 'public');

        // Return a response, you can modify this as needed
        return response()->json(['message' => $fileName]);
    }

    public function getUploadProgress(){
        $progress = Cache::get('upload_progress', 0);

        return response()->json(['progress' => $progress]);
    }
}
