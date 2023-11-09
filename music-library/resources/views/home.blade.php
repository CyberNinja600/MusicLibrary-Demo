
@extends('layouts.app')

@section('content')

<div class="flex flex-col min-h-screen z-10 overflow-y-auto " id="home">
    

    <div class='flex static'>

            <left-nav-bar> </left-nav-bar>
            <home-library :user="{{ json_encode(Auth::user()) }}"></home-library>


    </div>

    <div class="static">
        <music-player> </music-player>
    </div> 

</div>

@endsection