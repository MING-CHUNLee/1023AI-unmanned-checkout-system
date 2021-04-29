@extends('layouts.app')


@section('content')

<div class="container m-2">
<h3>{{$post->title}}</h3>
<small>Written on {{$post->created_at}}</small>
<div>
    {{$post->body}}
</div>
<a href="/posts" class="btn btn-primary"> Go back </a>
</div>
@endsection