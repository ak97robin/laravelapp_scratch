@extends('layouts.app')
@section('content')
    <h1>Postiess</h3>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class="well">
                    <h3><a href="/post/{{$post->id}}"">{{$post->title}}</a></h3>
                    <small>written on{{$post->created_at}}</small}
                </div>
            @endforeach
        {{$posts->links()}}
        @else
            <p>Nothing found inside</p>
        @endif
@endsection
