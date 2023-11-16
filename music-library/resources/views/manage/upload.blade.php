@extends('layouts.app')

@section('content')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="upload" class="overflow-y-auto scroll-container custom-scrollbar dark:darkcustom-scrollbar bg-neutral-900 flex static ">
        <upload-song :user="{{ Auth::user() }} " class=""> </upload-song>
    </div>

@endsection