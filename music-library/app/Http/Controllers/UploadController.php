<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function upload()
    {
        return view('manage.upload');
    }

    public function manage()
    {
        return view('manage.manage');
    }

    public function managealbum()
    {
        return view('manage.managealbum');
    }
}
