@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" class="css">
@stop
@section('content')
    <h1>Media page</h1>

    {!! Form::open(['method'=>'POST','action'=>'DoorsControllersud@store', 'class'=>'dropzone']) !!}
    <div class="form-group">

    </div>
    <div class="form-group">

    {!! Form::submit('submit photos',['class'=>'btn btn-primary']) !!}

    </div>
    {!! Form::close() !!}

<h1>hey there</h1>





@endsection


@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

@stop