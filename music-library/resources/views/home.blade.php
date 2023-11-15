
@extends('layouts.app')

@section('content')

<div class="flex flex-col min-h-screen z-10 " id="home">
    

    <div class='flex static sm'>
            <left-nav-bar > </left-nav-bar>
            <home-library :user="{{ Auth::user() }}"></home-library>


    </div>

    <div class="static">
        <music-player> </music-player>
    </div> 

</div>

@endsection