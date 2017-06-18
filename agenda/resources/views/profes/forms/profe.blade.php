
	<div class="form-group">
		{!!Form::label('Nombre')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'IngresaNombre'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('RPE')!!}
		{!!Form::text('rpe',null,['size'=>'10','class'=>'form-control','placeholder'=>'Ingresa rpe'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('TITULO')!!}
		{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa titulo de estudio'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('POSGRADO')!!}
		{!!Form::text('esPosgrado',null,['class'=>'form-control','placeholder'=>'Ingresa grado de estudio'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('FECHA NACIMIENTO')!!}
		{!!Form::text('fecha_nac',null,['class'=>'form-control','placeholder'=>'Ingresa fecha de nacimiento'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('RFC')!!}
		{!!Form::text('rfc',null,['class'=>'form-control','placeholder'=>'Ingresa rfc'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('TELEFONO PARTICULAR ')!!}
		{!!Form::text('tel_particular',null,['class'=>'form-control','placeholder'=>'Ingresa telelfono particular'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('TELEFONO CELULAR')!!}
		{!!Form::text('tel_cel',null,['class'=>'form-control','placeholder'=>'Ingresa numero movil'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('TELEFONO Oficina')!!}
		{!!Form::text('tel_oficina',null,['class'=>'form-control','placeholder'=>'Ingresa telefono de oficina'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('EMAIL')!!}
		{!!Form::text('correo',null,['class'=>'form-control','placeholder'=>'Ingresa Email'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email', 'E-Mail Alternativo', ['class' => 'awesome']);!!}
		{!!Form::text('correo_alter',null,['class'=>'form-control','placeholder'=>'Ingresa correo alternativo'])!!}
	</div>
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}