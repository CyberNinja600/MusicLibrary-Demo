<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\PlaylistName;
use Illuminate\Http\Request;

class PlaylistNames extends Controller
{
    public function playlist_name_create(Request $request)
    {   
        $request->validate([
            'artist_name' => 'required|string|max:255',
            'album_name' => 'required|string|max:255',
            'playlist_img' => 'required|string|max:255',
        ]);

        $playlist_name = new PlaylistName;
        $playlist_name->artist_name = $request->artist_name;
        $playlist_name->album_name = $request->album_name;
        $playlist_name->playlist_img = $request->playlist_img;
        $playlist_name->save();
        return response()->json([
            'message' => 'playlist name created'
        ], 200);
    }
}
