@extends('layouts.app')

@section('content')
    <div class="thread text-left rounded p-3 text-left intro neon blue" style="background-color: #4450e040; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
        <div class="thread__header mb-5" >
            <h3>{{$feed->title}}</h3>
        </div>
        <div class="thread__body mb-5 text-truncate" style="max-width: 100%;">
            @if($feed->preview)
                <img src="{{\Illuminate\Support\Facades\Storage::url($feed->preview)}}" class="img-fluid w-100">
            @endif
            <p class="mt-3">
                {{$feed->body}}
            </p>
        </div>
        <div class="thread__footer">
            <p>{{$feed->created_at->diffForHumans()}}</p>
        </div>
         @can('update', $feed)
                <a href="/feed/{{$feed->id}}/edit" class="btn btn-warning btn-block text-white">Редактировать</a>
                <form action="{{route('feed.destroy', $feed->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger btn-block">Удалить</button>
                </form>
            @endcan
    </div>
    <form class="mb-4 mt-4" action="/feed/reply/{{$feed->id}}" method="POST">
        @csrf
        <textarea class="form-control intro neon blue" name="body" id="d2" cols="30" rows="10"
                  style="padding-top: 8px; padding-bottom: 8px; padding-left: 10px; padding-right: 10px; margin-bottom: 15px; background-color: #4450e040; "
                  placeholder="Ваш комментарий"></textarea>
        <button class="btn intro neon gren btn-primary btn-block"
                style="background-color: #05ff5375; padding-top: 10px; padding-bottom: 10px; margin-top: 25px; margin-bottom: 25px;">
            Отправить
        </button>
    </form>

    @include('replies.show');
@endsection