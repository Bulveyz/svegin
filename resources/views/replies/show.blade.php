@foreach($replies as $reply)
<div class="intro neon red" style="text-align: left; color: white; padding-top:25px; padding-bottom: 15px; padding-left: 15px; margin-top: 15px; margin-bottom: 15px; background-color: #e0444470">
    <p>{{$reply->body}}</p>
    <div class="text-right pr-3">
         <img class="img-thumbnail" style="width: 100px; height: 100px" src="{{\Illuminate\Support\Facades\Storage::url($reply->creator->avatar)}}" alt="">
        <p>{{$reply->creator->name}} | {{$reply->created_at->diffForHumans()}}</p>
    </div>
</div>
@endforeach