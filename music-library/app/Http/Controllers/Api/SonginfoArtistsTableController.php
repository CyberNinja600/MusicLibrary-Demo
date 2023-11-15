<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Songinfo_artist;
use Illuminate\Http\Request;

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

        
        
        $Artists = new Songinfo_artist();
        $Artists->artist_name = $request->input('receivedUserid');
        $Artists->song_file_name = $request->input('receivedFilename');
        $Artists->save();


        for($i=0; $i<count($request->input('selectedFeatureArtist')); $i++){
            $Artists = new Songinfo_artist();
            $Artists->artist_name = $request->input('selectedFeatureArtist')[$i];
            $Artists->song_file_name = $request->input('receivedFilename');
            $Artists->save();
        }


        return response()->json(['message' => $request->input('receivedFilename')]);
    }
}
