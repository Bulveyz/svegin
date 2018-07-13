@extends('layouts.app')

@section('content')
    @foreach($threads as $thread)
        <a href="/threads/{{$thread->channel->name}}/{{$thread->id}}">{{$thread->title}}</a>
        <hr>
    @endforeach
@endsection