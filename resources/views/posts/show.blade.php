@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written om {{$post->created_at}}</small>

@endsection

