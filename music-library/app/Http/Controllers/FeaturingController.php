<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FeaturingController extends Controller
{
    public function index()
    {
        // $users = User::all(); // Assuming User is your model
        $users = User::select('name', 'id')->get();
        return response()->json(['user'=>$users]);
    }
}
