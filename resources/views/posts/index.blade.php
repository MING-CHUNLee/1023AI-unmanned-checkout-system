@extends('layouts.app')


@section('content')
<div class="container m-2">
<h3>Posts</h3>

@if(count($posts)>1)
        @foreach($posts as $post)
   
        <div class="card bg-light p-3 m-4">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
        @endforeach
@else
    <p>No post found</p>
    @endif


</div>
@endsection