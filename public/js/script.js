$("#registro").click(function(){
	var dato = $('#genre').val();
	var token = $('#token').val();
	var route = "http://localhost:8000/genero"

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data: {genre: dato},
		success:function(){
		$("#msj").fadeIn();
		},
		error:function(msj){
		//console.log(msj.responseJSON.genre);
		$("#msjs").html(msj.responseJSON.genre);
		$("#msj-error").fadeIn();
		}
	});
});