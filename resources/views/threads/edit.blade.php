@extends('layouts.app')

@section('content')
    <form action="{{route(' threads.update', $thread->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <input placeholder="Заголовок" value="{{$thread->title}}" name="title" class="form-control" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;"></input>
        </div>
        <div class="form-group">
            <select placeholder="Заголовок" name="channel_id" class="form-control" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;">
                <option selected value="{{$thread->channel->id}}" >{{$thread->channel->name}}</option>
                @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group intro neon gren" style="background-color: #05ff5375; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">
            <textarea name="body" rows="8" class="form-control" style="background-color: rgba(68, 80, 224, 0); border: none; color: white;">{{$thread->body}}</textarea>
        </div>
        <button class="btn btn-block btn-primary intro neon gren" style="background-color: #05ff5375; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px; margin-bottom: 25px;">Обновить</button>
    </form>
@endsection