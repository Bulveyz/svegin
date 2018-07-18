@extends('layouts.app')

@section('content')
    <div class="text-left">
        <img style="width: 300px; height: 300px;" src="{{\Illuminate\Support\Facades\Storage::url($user->avatar)}}" alt="">
        <form style="width: 300px" action="/profile/avatar/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group d-flex">
                <input class="form-control" type="file" name="avatar">
                <button class="btn btn-primary">Загрузить</button>
            </div>
        </form>
    </div>
@endsection