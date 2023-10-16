@extends('layouts.app')



@section('content')
<div class="flex flex-col min-h-screen z-10 " id="home">
    

    <div class='flex'>

            <left-nav-bar> </left-nav-bar>
            <home-library></home-library>
            <!-- <home-library :user="{{ json_encode(Auth::user()) }}"></home-library> -->


    </div>

<div class="z-30">
    <music-player> </music-player>
</div> 

@endsection
