<?php

namespace App\Http\Controllers\Api;
use Carbon\Carbon;
use App\Models\User;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Models\Song_thumbnail;
use App\Models\Songinfo_table;
use App\Models\Songinfo_artist;
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
        $song->thumbnail_file_name = $request->input('thumbnail_file_name');
        $song->description = $request->input('description');
        $song->release_date = $request->input('songReleaseDate');
        $song->file_name = $request->input('filename');
        $song->uploaded_by = $request->input('uploadedby');
        // Save the song data
        $song->save();

        // Redirect back to the form with a success message or any other response you prefer
        return response()->json(['message' => $song->file_name]);
    }

    
    public function songs_by_user(Request $request){
        $id = $request->input('id');
        $query = $request->input('query');
    
        $queryBuilder = Songinfo_table::where('uploaded_by', $id);
    
        if ($query) {
            $queryBuilder->where('song_name', 'LIKE', '%' . $query . '%');
        }
    
        $songs = $queryBuilder->get(['song_name','id']);
    
        return response()->json(['songs' => $songs]);
    }
    

    public function get_song_info($id){
        // Find the song information based on the ID
        $song = Songinfo_table::where('id', $id)->first();
    
        // Check if the song is not found
        if (!$song) {
            return response()->json(['error' => 'Song not found'], 404);
        }
    
        // Extract song details
        $songName = $song->song_name;
        $fileName = $song->file_name;
    
        // Find all artists for the given song file name
        $artists = Songinfo_artist::where('song_file_name', $fileName)->pluck('artist_name')->all();

        $artists = User::whereIn('id', $artists)->get(['name']);
        
        // Find the thumbnail information based on the song file name
        $thumbnail = Song_thumbnail::where('song_file_name', $fileName)->first();
    
        // Return the response with the extracted information
        return response()->json([
            'song' => [
                'name' => $songName,
            ],
            'artists' => $artists,
            'thumbnail' => $thumbnail ? $thumbnail->thumbnail_file_name : null,
        ]);
    }
    
}
