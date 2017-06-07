@extends('layouts.principal')

@section('content')
{!!Form::open(['route'=>'profes.store', 'method'=>'post'])!!}
	@include('profes.forms.profe')
{!!Form::close()!!}
@stop