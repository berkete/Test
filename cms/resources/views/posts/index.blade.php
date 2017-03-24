@extends('layouts.app')

@section('content')

    <table>
     <ul>

             {{--<tr> <th>Id:  </th><th> Title:</th><th>Body</th><th>Created at</th></tr>--}}

           @foreach($posts as $post)


             {{--<a href="{{route('posts.show',$post->id)}}"<tr><td><li></td><td>{{$post->title}}</td><td>{{$post->body}}</td><td>{{$post->created_at}}</td></li></tr></a>--}}

               <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a><br/>
     </ul>

           @endforeach
    </table>
    @endsection