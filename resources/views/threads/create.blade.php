@extends('layouts.app')

@section('content')
    <form action="{{route('threads.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <input placeholder="Заголовок" name="title" class="form-control intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;"></input>
        </div>
        <div class="form-group">
            <select placeholder="Заголовок" name="channel_id" class="custom-select intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
                @foreach($channels as $channel)
                    <option value="{{$channel->id}}" class="intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">{{$channel->name}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea name="body" rows="8" class="form-control intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;"></textarea>
        </div>
        <button class="btn btn-block btn-primary intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">Создать</button>
    </form>
@endsection