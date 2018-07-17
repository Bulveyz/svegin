@extends('layouts.app')

@section('content')
<div style="text-align: left;">
	<section class="intro neon blue" style="padding-bottom: 10px; padding-top: 10px; padding-left: 10px; margin-bottom: 20px;">
    <h1>{{$thread->title}}</h1>
    <p>{{$thread->created_at->diffForHumans()}}</p>
    <p>{{$thread->body}}</p>
</section>
    <form action="/threads/reply/{{$thread->id}}" method="POST">
        @csrf
        <textarea class="form-control intro neon blue" name="body" id="d2" cols="30" rows="10" style="padding-top: 8px; padding-bottom: 8px; padding-left: 10px; padding-right: 10px; margin-bottom: 15px; background-color: #4450e040; " type="fdfgdf"></textarea>
        <button class="btn intro neon gren btn-primary btn-block" style="background-color: #05ff5375; padding-top: 10px; padding-bottom: 10px; margin-top: 25px; margin-bottom: 25px;">Отправить</button>
    </form>
</div>
    @include('replies.show');
@endsection