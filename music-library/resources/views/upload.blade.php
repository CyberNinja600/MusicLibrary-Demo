@extends('layouts.app')

@section('content')
    
    <div id="upload" class="overflow-y-scroll bg-neutral-900 ">
        <upload-song :user="{{ Auth::user() }}" class=""> </upload-song>
    </div>

@endsection