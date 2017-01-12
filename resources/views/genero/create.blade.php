@extends('layouts.admin')
	@section('content')
		{!!Form::open()!!}
			<div id="msj" class="alert alert-success alert-dismissible" role="alert" style="display:none">
				<strong>Genero agregado correctamente.</strong>
			</div>
			<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
				<strong id="msjs"></strong>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
			@include('genero.forms.genero')
			{!!link_to('#',$title='Registrar',$attributes = ['id'=>'registro','class'=>'btn btn-primary'],$secure=null)!!}
		{!!Form::close()!!}
	@endsection
@section('scripts')
{!!Html::script('js/script.js')!!}
@endsection