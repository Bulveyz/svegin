@extends('layouts.app')

@section('content')
    <form action="{{route('threads.update', $thread->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
            <input placeholder="Заголовок" value="{{$thread->title}}" name="title" class="form-control"></input>
        </div>
        <div class="form-group">
            <select placeholder="Заголовок" name="channel_id" class="form-control">
                <option selected value="{{$thread->channel->id}}">{{$thread->channel->name}}</option>
                @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea name="body" rows="8" class="form-control">{{$thread->body}}</textarea>
        </div>
        <button class="btn btn-block btn-primary">Обновить</button>
    </form>
@endsection