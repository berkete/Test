@extends('layouts.app')


@section('content')
<h1>This is create page!</h1>
    {{--//<form action="/posts" method="post">--}}

{!! Form::open(['method'=>'POST', 'action'=>'PostController@store']) !!}
        {{csrf_field()}}


<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

    {{--//<input type="submit"  name="submit">--}}

</div>

{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@if(count($errors)>0)

     <div class="alert alert-danger">


          <ul>

              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>




                  @endforeach






          </ul>








     </div>








    @endif

{{--


       --}}
{{-- <table>
            <tr>
                <td>
        Title  :   </td> <td><input type="text" name="title" placeholder="enter name"></td></tr>
            <tr><td>
        User_Id:    </td><td><input type="text" name="user_id" placeholder="user id"></td></tr>
            <tr><td>
          Body:    </td> <td><input type="text" name="body" placeholder="this is the body"><br/></td></tr>
                   <tr><td></td><td> <input type="submit"  name="submit"></td></tr>--}}{{--



     {!! Form::close() !!}
         </table>
--}}
    {{--{!! Form::open() !!}--}}
{{--<input type="text" name="body" placeholder="this is the body">--}}
{{--<input type="submit"  name="submit">--}}

    {{--//{!! Form::close() !!}--}}

  @endsection