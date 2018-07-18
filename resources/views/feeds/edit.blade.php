@extends('layouts.app')

@section('content')
    <form action="{{route('feed.update', $feed->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        {{method_field('PUT')}}
        <div class="input-group intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <input type="text" class="form-control" name="title" value="{{$feed->title}}" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;">
        </div>
        <div class="input-group intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <input type="file" class="form-control" name="preview" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;">
        </div>
        <div class="input-group intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <textarea class="form-control" name="body" cols="30" rows="10" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;">{{$feed->body}}</textarea>
        </div>
        <div class="input-group">
            <button class="btn btn-block btn-primary intro neon gren" style="background-color: #05ff5375; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">Опубликовать</button>
        </div>
    </form>
@endsection