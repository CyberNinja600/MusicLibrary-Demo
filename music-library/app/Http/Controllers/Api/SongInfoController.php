<?php

namespace App\Http\Controllers\Api;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Models\Songinfo_table;
use App\Http\Controllers\Controller;

class SongInfoController extends Controller
{   
    public function songinfovalidation(Request $request){

        try{
            $request->validate([
                'songTitle' => 'required|string|max:255',
                // 'artistName' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'songReleaseDate' => 'required|date',
                'uploadedby' => 'required|numeric|max:255',
            ]);

            return response()->json(['message' => 'successful']);
        }

        catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['message' => 'failed']);
        }

    }
    public function store(Request $request)
    {   

        $releaseDate = Carbon::parse($request->input('songReleaseDate'));

        // // Modify the request data with the converted date
        $request->merge(['songReleaseDate' => $releaseDate]);
        
        // Validate the form data
        $request->validate([
            'songTitle' => 'required|string|max:255',

            'description' => 'required|string|max:255',
            'songReleaseDate' => 'required|date',
            'filename' => 'required|string|max:255',
            'uploadedby' => 'required|numeric|max:255',
        ]);
        
        // Create a new Songinfo_table instance
        $song = new Songinfo_table();
        $song->song_name = $request->input('songTitle');

        $song->description = $request->input('description');
        $song->release_date = $request->input('songReleaseDate');
        $song->file_name = $request->input('filename');
        $song->uploaded_by = $request->input('uploadedby');
        // Save the song data
        $song->save();

        // Redirect back to the form with a success message or any other response you prefer
        return response()->json(['message' => $song->file_name]);
    }
}
