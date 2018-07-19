@extends('layouts.app')

@section('content')
    <form class="" action="{{route('feed.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="input-group intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <input type="text" class="form-control" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;" name="title">
        </div>
        <div class="input-group intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <input type="file" class="form-control" style="background-color: rgba(68, 80, 224, 0); border: none;" name="preview">
        </div>
        <div class="input-group">
            <textarea class="form-control intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;" name="body" cols="30" rows="10"></textarea>
        </div>
        <div class="input-group">
            <button class="btn btn-block btn-primary intro neon gren" style="background-color: #05ff5375; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">Опубликовать</button>
        </div>
    </form>
@endsection