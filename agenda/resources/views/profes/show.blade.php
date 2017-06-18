@extends('layouts.principal')

@section('content')

	<div class="col-sn-8"; style="padding-left: 100px; width: 80%; ">
		<h2>
			{{$teacher->nombre}}
			<a href="{{route('profes.edit',$teacher->id)}}" class="btn btn-danger pull-right">EDIT</a>
		</h2>
		<strong>RPE</strong>
			<p>{{$teacher->rpe}}</p>
			<p style="border-style: solid;"></p>
			<strong>TITULO</strong>
			<p>{{$teacher->titulo}}</p>
			<p style="border-style: solid;"></p>
			<strong>POSGRADO</strong>
			<p>{{$teacher->esPosgrado}}</p>
			<p style="border-style: solid;"></p>
			<strong>F. NACIMIENTO</strong>
			<p>{{$teacher->fecha_nac}}</p>
			<p style="border-style: solid;"></p>
			<strong>RFC</strong>
			<p>{{$teacher->rfc}}</p>
			<p style="border-style: solid;"></p>
			<strong>TEL PARTICULAR</strong>
			<p>{{$teacher->tel_particular}}</p>
			<p style="border-style: solid;"></p>
			<strong>TEL CELULAR</strong>
			<p>{{$teacher->tel_cel}}</p>
			<p style="border-style: solid;"></p>
			<strong>TEL OFICINA</strong>
			<p>{{$teacher->tel_oficina}}</p>
			<p style="border-style: solid;"></p>
			<strong>EMAIL</strong>
			<p>{{$teacher->correo}}</p>
			<p style="border-style: solid;"></p>
			<strong>ALTERNATIVO</strong>
			<p>{{$teacher->correo_alter}}</p>

	</div>
@stop