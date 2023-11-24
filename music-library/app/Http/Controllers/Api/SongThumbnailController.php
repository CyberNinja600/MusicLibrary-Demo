<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song_thumbnail;


class SongThumbnailController extends Controller
{
    public function upload_thumbnail(Request $request){
        
        $request->validate([
            'thumbnail_file_name' => 'string|max:255|required',
            'song_file_name' => 'string|max:255|required',
        ]);

        // return two variable for thumbnail_file_name and song_file_name key
        $song = new Song_thumbnail();
        $song->thumbnail_file_name = $request->input('thumbnail_file_name');
        $song->song_file_name = $request->input('song_file_name');
        $song->save();

        return response()->json(['thumbnail_file_name' => 'succesful']);

    }
}
