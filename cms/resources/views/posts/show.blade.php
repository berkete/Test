@extends('layouts.app')

@section('content')

<a href="{{route('posts.edit',$post->id)}}" ><h1>{{$post->title}}<br>{{$post->body}}</h1></a>


@endsection