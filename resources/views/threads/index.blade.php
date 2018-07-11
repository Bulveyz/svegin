@extends('layouts.app')

@section('content')
    @foreach($threads as $thread)
        <a href="{{$thread->path()}}">{{$thread->title}}</a>
        <hr>
    @endforeach
@endsection