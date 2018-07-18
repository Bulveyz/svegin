@extends('layouts.app')

@section('content')
    @foreach($feeds as $feed)
        <div class="thread text-left intro blue neon rounded p-3 text-left" style="margin-bottom: 35px;">
            <div class="thread__header mb-5">
                <h3>{{$feed->title}}</h3>
            </div>
            <div class="thread__body mb-5 text-truncate" style="max-width: 100%;">
                @if($feed->preview)
                    <img src="{{\Illuminate\Support\Facades\Storage::url($feed->preview)}}" class="img-fluid w-100">
                @endif
            </div>
            <div class="thread__footer d-flex justify-content-between">
                <p>{{$feed->created_at->diffForHumans()}}</p>
                <a href="/feed/{{$feed->id}}"
                   class="btn neon gren btn-outline-success" style="    background-color: #02fd1e80;">Открыть</a>
            </div>
        </div>
    @endforeach
@endsection