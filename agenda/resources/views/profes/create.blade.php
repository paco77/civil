@extends('layouts.principal')

@section('content')
<div class="form">
	{!!Form::open(['route'=>'profes.store', 'method'=>'post'])!!}
		@include('profes.forms.profe')
	{!!Form::close()!!}
</div>
@stop