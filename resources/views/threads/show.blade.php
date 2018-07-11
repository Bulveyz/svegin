@extends('layouts.app')

@section('content')
    <h1>{{$thread->title}}</h1>
    <p>{{$thread->created_at->diffForHumans()}}</p>
    <p>{{$thread->body}}</p>
    <form action="/threads/reply/{{$thread->id}}" method="POST">
        @csrf
        <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-primary btn-block">Отправить</button>
    </form>
    @include('replies.show');
@endsection