@extends('layouts.app')

@section('content')
    <div class="thread text-left bg-white rounded p-3 text-left">
        <div class="thread__header mb-5">
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
        <div class="thread__footer d-flex justify-content-between">
            <p>{{$feed->created_at->diffForHumans()}}</p>
            <a href="/feed/{{$feed->id}}/edit">Редактировать</a>
            <form action="{{route('feed.destroy', $feed->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <button class="btn">Удалить</button>
            </form>
        </div>
    </div>
@endsection