<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Models\MusicInfo;
use App\Models\ArtistsSong;
use App\Http\Controllers\Controller;

class SonginfoArtistsTableController extends Controller
{

    public function featureArtistnameValidation(Request $request){
        try{
            $request->validate([
                'selectedFeatureArtist' => 'array|max:255',
                // 'receivedUserid' => 'required|numeric|max:255',
            ]);

            return response()->json(['message' => 'successful']);
        }

        catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['message' => 'failed']);
        }
    }

    public function featureArtistname(Request $request){
        $request->validate([
            'selectedFeatureArtist' => 'array|max:255',
            'receivedFilename' => 'required|string|max:255',
            'receivedUserid' => 'required|numeric|max:255',
        ]);

        
        $song_id = MusicInfo::where('file_name', $request->input('receivedFilename'))->first()->id;
        $Artists = new ArtistsSong();
        $Artists->artist_name = $request->input('receivedUserid');
        $Artists->song_id = $song_id;
        $Artists->save();


        for($i=0; $i<count($request->input('selectedFeatureArtist')); $i++){
            $Artists = new ArtistsSong();
            $Artists->artist_name = $request->input('selectedFeatureArtist')[$i];
            $Artists->song_id = $song_id;
            $Artists->save();
        }


        return response()->json(['message' => $request->input('receivedFilename')]);
    }
}
