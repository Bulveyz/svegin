@extends('layouts.app')

@section('content')
    <form action="{{route('threads.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <input placeholder="Заголовок" name="title" class="form-control"></input>
        </div>
        <div class="form-group">
            <select placeholder="Заголовок" name="channel_id" class="custom-select">
                @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea name="body" rows="8" class="form-control"></textarea>
        </div>
        <button class="btn btn-block btn-primary">Создать</button>
    </form>
@endsection