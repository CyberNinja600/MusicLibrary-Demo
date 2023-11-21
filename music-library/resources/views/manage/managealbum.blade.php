@extends('layouts.app')

@section('content')

    @csrf
    <manage-album :user="{{ Auth::user()->id }}"> </manage-album>

@endsection