@extends('layouts.principal')

@if(Session::has('message'))
<div class="alert alert-succes alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
	<table class="table table-bordered"; style="background-color:rgb(0,100,255); text-align: center;">
		<thead>
			<th>NOMBRE</th>
			<th100E255h>
			<th>TITULO</th>
			<th>POSGRADO</th>
			<th>F. NACIMIENTO</th>
			<th>RFC</th>
			<th>TEL PARTICULAR</th>
			<th>TEL CELULAR</th>
			<th>TEL OFICINA</th>
			<th>EMAIL</th>
			<th>ALTERNATIVO</th>	
			<th>OPTION</th>	
		</thead>
		@foreach($teachers as $teacher)
		<tbody>
			<td>{{$teacher->nombre}}</td>
			<td>{{$teacher->rpe}}</td>
			<td>{{$teacher->titulo}}</td>
			<td>{{$teacher->esPosgrado}}</td>
			<td>{{$teacher->fecha_nac}}</td>
			<td>{{$teacher->rfc}}</td>
			<td>{{$teacher->tel_particular}}</td>
			<td>{{$teacher->tel_cel}}</td>
			<td>{{$teacher->tel_oficina}}</td>
			<td>{{$teacher->correo}}</td>
			<td>{{$teacher->correo_alter}}</td>
			<td>

				{!!link_to_route('profes.edit', $title = 'Edit', $parameters = $teacher->id, $attributes = ['class'=>'btn btn-danger']);!!}
			</td>	
		</tbody>
		@endforeach
	</table>
@stop