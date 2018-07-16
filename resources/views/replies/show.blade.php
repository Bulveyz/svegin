@foreach($replies as $reply)
<div class="intro neon red" style="text-align: left; color: white; padding-top:25px; padding-bottom: 15px; padding-left: 15px; margin-top: 15px; margin-bottom: 15px; background-color: #e0444470">
    <p>{{$reply->body}}</p>
</div>
@endforeach