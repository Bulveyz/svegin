@extends('layouts.app')

@section('content')
    <div class="text-left">
        <div class="row">
            <div class="col-sm-4">
                <img style="width: 300px; height: 300px;" src="{{\Illuminate\Support\Facades\Storage::url($user->avatar)}}" alt="">
                <form style="width: 300px" action="/profile/avatar/{{$user->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group d-flex">
                        <input class="form-control" type="file" name="avatar">
                        <button class="btn btn-primary">Загрузить</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-8">
                @if(auth()->user()->name == 'Admin')
                    <div>
                        <a class="btn neon blue" href="/feed/create">Добавить новость</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection