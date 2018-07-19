@extends('layouts.app')

@section('content')
    <div class="text-right">
        <a class="btn neon blue" href="/threads/create">Новое обсуждение</a>
    </div>
    <br><br>
    @foreach($threads as $thread)
        <div class="thread rounded p-3 text-left intro neon blue" style="margin-bottom: 50px">
            <div class="thread__header mb-5">
                <h3>{{$thread->title}}  | {{$thread->channel->name}}</h3>
            </div>
            <div class="thread__body mb-5 text-truncate" style="max-width: 100%;">
                @if($thread->IsPublished)
                    {!! $thread->body !!}
                @endif
            </div>
            <div class="thread__footer d-flex justify-content-between">
                <p>{{$thread->created_at->diffForHumans()}}</p>
                <a href="/threads/{{$thread->channel->name}}/{{$thread->id}}"
                   class="btn neon gren btn-outline-success" style="    background-color: #02fd1e80;">Читать далее</a>
            </div>
        </div>
    @endforeach
@endsection