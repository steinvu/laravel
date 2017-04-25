@extends('pages.layout')

@section('content')
    <h6> Welcome on test 1!</h6>

    @foreach($list as $lijstje)

    	<li>{{$lijstje}}</li>

    @endforeach
@stop

@section('footermessage')
    <h9> MY FOOTER!</h9>


@stop


