@extends('layouts.app')

@section('content')
    <form class="card bg-white" action="{{route('feed.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group">
            <input type="file" class="form-control" name="preview">
        </div>
        <div class="input-group">
            <textarea class="form-control" name="body" cols="30" rows="10"></textarea>
        </div>
        <div class="input-group">
            <button class="btn btn-block btn-primary">Опубликовать</button>
        </div>
    </form>
@endsection