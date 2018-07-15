@extends('layouts.app')

@section('content')
    @foreach($threads as $thread)
        <div class="thread bg-white rounded p-3 text-left">
            <div class="thread__header mb-5">
                <h3>{{$thread->title}}</h3>
            </div>
            <div class="thread__body mb-5 text-truncate" style="max-width: 100%;">
                @if($thread->IsPublished)
                    {!! $thread->body !!}
                @endif
            </div>
            <div class="thread__footer d-flex justify-content-between">
                <p>{{$thread->created_at->diffForHumans()}}</p>
                <a href="/threads/{{$thread->channel->name}}/{{$thread->id}}"
                   class="btn btn-outline-success">Читать далее</a>
            </div>
        </div>
    @endforeach
@endsection