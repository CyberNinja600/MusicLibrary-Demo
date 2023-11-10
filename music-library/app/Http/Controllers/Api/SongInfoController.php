<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Songinfo_table;
use Carbon\Carbon;

class SongInfoController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'songTitle' => 'required|string|max:255',
            // 'artistName' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'songReleaseDate' => 'required|date',
            'filename' => 'required|string|max:255',
            'uploadedby' => 'required|numeric|max:255',
        ]);
        
        // Create a new Songinfo_table instance
        $song = new Songinfo_table();
        $song->song_name = $request->input('songTitle');
        // $song->artist_name = $request->input('artistName');
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
