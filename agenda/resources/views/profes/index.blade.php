@extends('layouts.principal')

@if(Session::has('message'))
<div class="alert alert-succes alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
<div style="padding-top: 20px;">
	<table class="table table-bordered table-striped fixed"; style="text-align: center;
	font-size: 90%;">
		<thead>
			<th>NOMBRE</th>
			<th>RPE</th>
			<th>TITULO</th>
			<th>POSGRADO</th>
			<!--<th>F. NACIMIENTO</th>-->
			<th>RFC</th>
			<th>TEL PARTICULAR</th>
			<th>TEL CELULAR</th>
			<th>TEL OFICINA</th>
			<th>EMAIL</th>
			<th>ALTERNATIVO</th>	
			<th>OPTION</th>	
		</thead>
		<tbody><td></td><td></td><td></td></tbody>
		@foreach($teachers as $teacher)
		<tbody>
			<td><strong>{{$teacher->nombre}}</strong></td>
			<td>{{$teacher->rpe}}</td>
			<td>{{$teacher->titulo}}</td>
			<td>{{$teacher->esPosgrado}}</td>
			<!--<td>{{$teacher->fecha_nac}}</td>-->
			<td>{{$teacher->rfc}}</td>
			<td>{{$teacher->tel_particular}}</td>
			<td>{{$teacher->tel_cel}}</td>
			<td>{{$teacher->tel_oficina}}</td>
			<td>{{$teacher->correo}}</td>
			<td>{{$teacher->correo_alter}}</td>
			<td>

				{!!link_to_route('profes.edit', $title = 'Edit', $parameters = $teacher->id, $attributes = ['class'=>'btn btn-danger']);!!}

				{!!link_to_route('profes.show', $title = 'Ver', $parameters = $teacher->id, $attributes = ['class'=>'btn btn-danger']);!!}
			</td>	
			

				
		</tbody>
		@endforeach
	</table>
	{!!$teachers->links()!!}
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
    goheadfixed('table.fixed');


	function goheadfixed(classtable) {
	
		if($(classtable).length) {
	
			$(classtable).wrap('<div class="fix-inner"></div>'); 
			$('.fix-inner').wrap('<div class="fix-outer" style="position:relative; margin:auto;"></div>');
			$('.fix-outer').append('<div class="fix-head"></div>');
			$('.fix-head').prepend($('.fix-inner').html());
			$('.fix-head table').find('caption').remove();
			$('.fix-head table').css('width','100%');
	
			$('.fix-outer').css('width', $('.fix-inner table').outerWidth(true)+'px');
			$('.fix-head').css('width', $('.fix-inner table').outerWidth(true)+'px');
			$('.fix-head').css('height', $('.fix-inner table thead').height()+'px');
	
			// If exists caption, calculte his height for then remove of total
			var hcaption = 0;
			if($('.fix-inner table caption').length != 0)
				hcaption = parseInt($('.fix-inner table').find('caption').height()+'px');

			// Table's Top
			var hinner = parseInt( $('.fix-inner').offset().top );

			// Let's remember that <caption> is the beginning of a <table>, it mean that his top of the caption is the top of the table
			$('.fix-head').css({'position':'absolute', 'overflow':'hidden', 'top': hcaption+'px', 'left':0, 'z-index':100 });
		
			$(window).scroll(function () {
				var vscroll = $(window).scrollTop();

				if(vscroll >= hinner + hcaption)
					$('.fix-head').css('top',(vscroll-hinner)+'px');
				else
					$('.fix-head').css('top', hcaption+'px');
			});
	
			/*	If the windows resize	*/
			$(window).resize(goresize);
	
		}
	}

	function goresize() {
		$('.fix-head').css('width', $('.fix-inner table').outerWidth(true)+'px');
		$('.fix-head').css('height', $('.fix-inner table thead').outerHeight(true)+'px');
	}
    
});
	</script>
@stop