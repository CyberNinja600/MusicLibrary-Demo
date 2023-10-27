@extends('layouts.app')

@section('content')
    
    <div id="upload">
        <upload-song :user="{{ Auth::user() }}"> </upload-song>
    </div>

@endsection