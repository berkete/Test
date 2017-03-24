@extends('layouts.app')


@section('content')
    <h1>Contact page!</h1>

    @if(count($people))
        @foreach($people as $person)
            <li>His excellency:
                {{$person}}
            </li>

            @endforeach

    @endif
    @stop

@section('footer')

    {{--<script>alert('Hello contact page')--}}
        {{--confirm('Hello there')</script>--}}

    @stop