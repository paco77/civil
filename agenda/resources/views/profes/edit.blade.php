@extends('layouts.principal')
@section('content')
	{!!Form::model($teacher,['route'=>['profes.update', $teacher->id], 'method'=>'put'])!!}
@include('profes.forms.profe')
{!!Form::close()!!}
<br>
{!!Form::open(['route'=>['profes.destroy',$teacher->id],'method'=>'DELETE'])!!}
{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}
@stop