@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
	<div class="menu">
				<ul>
					<li><a class="active" href="/"><i class="home"></i></a></li>
					<li><a href="reviews"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="contact"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
				<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="/"><img src="images/logo.png" alt="" /></a>
					<p>JJNotify</p>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="header-info">
				<h1>ENTRAR</h1>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('Correo: ')!!}
						{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Contraseña: ')!!}
						{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
				{!!Form::submit('Iniciar Sesión',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
		</div>
	@endsection	