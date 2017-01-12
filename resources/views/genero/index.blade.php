@extends('layouts.admin')
@include('alerts.success')
@section('content')
	@include('genero.modal')
	<div id="msj" class="alert alert-success alert-dismissible" role="alert" style="display:none">
				<strong>Cambios realizados correctamente.</strong>
			</div>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>
@endsection

@section('scripts')
{!!Html::script('js/script2.js')!!}
@endsection