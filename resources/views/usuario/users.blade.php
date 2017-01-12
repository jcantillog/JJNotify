{!!$users->render()!!}
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<th>{{$user->name}}</th>
			<th>{{$user->email}}</th>
			<th>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</th>
		</tbody>
		@endforeach
	</table>