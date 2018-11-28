<div class="col-md-3">



    <a class="btn btn-success form-control"  href="{{route('thread.create')}}">Create Thread</a> <br><br>

    <ul class="list-group">
        <a href="{{route('thread.index')}}" class="list-group-item">

            All Threads
        </a>
        {{--  @foreach($tags as $tag)
        <a href="{{route('thread.index',['tags'=>$tag->id])}}" class="list-group-item">
            <span class="badge">14</span>
            {{$tag->name}}
    </a>
        @endforeach  --}}
        {{--<a href="#" class="list-group-item">--}}
            {{--<span class="badge">2</span>--}}
            {{--PHP--}}
        {{--</a>--}}
        {{--<a href="#" class="list-group-item">--}}
            {{--<span class="badge">1</span>--}}
            {{--Python--}}
        {{--</a>--}}
    </ul>
</div>
