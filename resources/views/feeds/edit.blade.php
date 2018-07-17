@extends('layouts.app')

@section('content')
    <form class="card bg-white" action="{{route('feed.update', $feed->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        {{method_field('PUT')}}
        <div class="input-group">
            <input type="text" class="form-control" name="title" value="{{$feed->title}}">
        </div>
        <div class="input-group">
            <input type="file" class="form-control" name="preview">
        </div>
        <div class="input-group">
            <textarea class="form-control" name="body" cols="30" rows="10">{{$feed->body}}</textarea>
        </div>
        <div class="input-group">
            <button class="btn btn-block btn-primary">Опубликовать</button>
        </div>
    </form>
@endsection