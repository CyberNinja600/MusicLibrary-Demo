@extends('layouts.app')

@section('content')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="manageplaylist" class="overflow-y-auto scroll-container custom-scrollbar dark:darkcustom-scrollbar bg-neutral-900 flex static text-white">
        Managing here
    </div>

@endsection