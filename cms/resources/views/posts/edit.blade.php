@extends('layouts.app')


@section('content')
     <h2>This is edit page</h2>


     {!! Form::model($post,['method'=>'PATCH', 'action'=>['PostController@update',$post->id]]) !!}
     {{csrf_field()}}


     <div class="form-group">
         {!! Form::label('title','Title') !!}
         {!! Form::text('title',$post->title,['class'=>'form-control']) !!}

         {{--//<input type="submit"  name="submit">--}}

     </div>

     {!! Form::submit('update Post',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}


     {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy',$post->id]]) !!}
     {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}

     {!! Form::close() !!}

   {{--  <table>
    <form action="/posts/{{$post->id}}" method="post">
        {{csrf_field()}}

            <tr>
                <td>
                    <input type="hidden" name="_method" value="PUT"></td></tr>
                  <tr> <td>Title  : </td>   <td><input type="text" name="title" placeholder="enter name" value="{{$post->title}}"></td></tr>
            <tr><td>User_Id:    </td><td><input type="text" name="user_id" placeholder="user id" value="{{$post->user_id}}"></td></tr>
            <tr><td>Body:    </td> <td><input type="text" name="body" placeholder="this is the body" value="{{$post->body}}"><br/></td></tr>
            <tr><td></td><td> <input type="submit"  name="submit" value="Upadate">


    </form>


     <form  method="post" action="/posts/{{$post->id}}">
          {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE">
         <input type="submit" value="Delete">
     </form>
         </td></tr></table>--}}
    @endsection