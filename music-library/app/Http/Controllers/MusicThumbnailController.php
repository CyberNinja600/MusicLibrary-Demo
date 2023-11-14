<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicThumbnailController extends Controller
{
    public function uploadThumbnail(Request $request)
    {
        // Generate a random 10-digit alphanumeric string
        $randomString = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 10)), 0, 10);

        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png|max:90000000',
        ]);

        // // // Store the uploaded file in the storage folder with the random string as a prefix
        $file = $request->file('file');
        $fileName = $randomString . '_' . time() . '_' . $file->getClientOriginalName();
        $file->storeAs('images', $fileName, 'public');

        // Return a response, you can modify this as needed
        return response()->json(['message' => $fileName]);


        
        
    }
}
